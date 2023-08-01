<?php

namespace App\Http\Controllers\Otp;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class OtpController extends Controller
{

    public function signUp()
    {

        return view('auth.signup');
    }

    public function sendOtp(Request $re)
    {


        // dd($re);
        $error = $re->validate([
            'first_name' => 'required|string|min:4|max:255',
            'last_name' => 'required|string|min:4|max:255',
            'user_name' => 'required|string|min:4|max:255',
            'email' => 'required|email|min:4|max:255|unique:users',
            'mobile' => 'required|min:4|max:255|unique:users',

        ]);

        // redirect()->back()->with('error', $error);
        // dd($error);
        User::create(
            $error
            //     [
            //     'first_name' => $re->first_name,
            //     'last_name' => $re->last_name,
            //     'user_name' => $re->user_name,
            //     'email' => $re->email,
            //     'mobile' => $re->mobile,
            // ]


        );

        // dd($re);


        $app_key = config('app.alpha_app');
        $number = config('app.number');


        $this->generateOtp($re->email); //76w36476767

        $userr = User::where('email', $re->email)->first();

        // dd($actual_Otp);

        $otpp = $userr->otp;
        // dd($otpp);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('api_key' => $app_key, 'msg' => "Your Ztrios OTP Number:" . $otpp, 'to' => $number),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // echo ("Message is Successfully Delivered to the Phone Number");

        $encrypt_id = Crypt::encrypt($userr->id);  //for security purpose
        // dd($encrypt_id);
        return redirect('/otp/' . $encrypt_id);
    }


    public function generateOtp($email)
    {
        // $user_otp = Otp_user::where('user_id',  $user->id)->latest()->first();
        $now = Carbon::now();
        // dd($now);
        $now_time_plus_10 = $now->addMinute(5);

        $user = User::where('email', $email)->first();
        return  $user->update([
            'otp' => rand(1234, 9999),
            'expire_at' => $now_time_plus_10,
        ]);
        // dd($user);
    }


    public function resend($id)
    {
        // dd($id);
        $user_resend_code = User::where('id', $id)->first();
        $user_resend_code->update([
            'otp' => null,
            'expire_at' => null
        ]);

        // return redirect()->back();
        $app_key = config('app.alpha_app');
        $number = config('app.number');


        $this->generateOtp($user_resend_code->email); //76w36476767

        $userr = User::where('email', $user_resend_code->email)->first();

        // dd($actual_Otp);

        $otpp = $userr->otp;
        // dd($otpp);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('api_key' => $app_key, 'msg' => "Your Ztrios OTP Number:" . $otpp, 'to' => $number),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // echo ("Message is Successfully Delivered to the Phone Number");

        $encrypt_id = Crypt::encrypt($userr->id);  //for security purpose
        // dd($encrypt_id);
        return redirect('/otp/' . $encrypt_id);
    }

    public function Otp($id)
    {


        $decrypt_id =  Crypt::decrypt($id);
        // dd($decrypt_id);

        return view('auth.otp')->with('id', $decrypt_id);
    }

    public function post_Otp(Request $request)
    {

        $user = User::where('otp', $request->otp)->first();
        // dd($user);
        $now = Carbon::now();

        // $now_time_plus_10 = $now->addMinute(10);
        // $user && $now->isBefore($user->expire_at);

        // if ($now->isBefore($user->expire_at)) {
        // }

        if ($user && $now->isBefore($user->expire_at)) {
            return redirect('/tob/' . $user->id);
        } else {

            return redirect()->back()->with('error', "Your OTP is Invalid");
        }
    }

    public function tob($id)
    {

        $user = user::where('id', $id)->first();
        return view('auth.type_of_business')->with('user', $user);
    }


    public function post_tob(Request $re, $id)
    {

        $user = user::where('id', $id)->first();

        $user->update(
            [
                'type_of_business' => $re->business
            ]
        );

        return redirect('/location/' . $user->id);
    }

    public function location($id)
    {

        $user = user::where('id', $id)->first();
        return view('auth.business_location')->with('user', $user);
    }
    public function post_location(Request $re, $id)
    {

        $user = user::where('id', $id)->first();
        $user->update([
            'district' => $re->district,
            'city' => $re->city,
            'road' => $re->road,
            'zipcode' => $re->zipcode,
            'house' => $re->house
        ]);
        return redirect("/pin/" . $user->id);
    }
    public function pin($id)
    {

        $user = User::where('id', $id)->first();
        $change = gettype($user->id);
        return view('auth.pin_generate')->with('user_id', $user->id);
    }
    public function post_pin(Request $re, $user_id)
    {
        $user = user::where('id', $user_id)->first();
        // dd($user);
        $user->update([
            'password' => Hash::make($re->new_pin),
            'pin' => $re->new_pin
        ]);

        if ($user->type_of_business == 'electronics') {
            return redirect("/electronics_dashboard");
        } else if ($user->type_of_business == 'ecommerce') {
            return redirect("/ecommerce_dashboard");
        } else if ($user->type_of_business == 'appliances') {
            return redirect("/appliances_dashboard");
        } else if ($user->type_of_business == 'beauty_and_toys') {
            return redirect("/beauty_and_toys_dashboard");
        } else if ($user->type_of_business == 'clothes') {
            return redirect("/clothes_dashboard");
        } else if ($user->type_of_business == 'fashion') {
            return redirect("/fashion_dashboard");
        } else if ($user->type_of_business == 'groceries') {
            return redirect("/groceries_dashboard");
        } else if ($user->type_of_business == 'mobiles') {
            return redirect("/mobiles_dashboard");
        } else if ($user->type_of_business == 'shoes') {
            return redirect("/shoes_dashboard");
        } else if ($user->type_of_business == 'top_offers') {
            return redirect("/top_offers_dashboard");
        } else {
            return redirect("/two_wheel_dashboard");
        }
    }

    public function login()
    {
        return view('auth.login');
    }
    public function post_login(Request $re)
    {
        $email = $re->email_or_phn;
        $pass = $re->pass;

        $user = User::where('email', $email)->first();
        $token = $user->createToken('authToken')->plainTextToken;
        // dd($token);
        if (Auth::attempt(['email' => $email, 'password' => $pass])) {

            if ($user->type_of_business == 'electronics') {
                return redirect("/electronics_dashboard");
            } else if ($user->type_of_business == 'ecommerce') {
                return redirect("/ecommerce_dashboard");
            } else if ($user->type_of_business == 'appliances') {
                return redirect("/appliances_dashboard");
            } else if ($user->type_of_business == 'beauty_and_toys') {
                return redirect("/beauty_and_toys_dashboard");
            } else if ($user->type_of_business == 'clothes') {
                return redirect("/clothes_dashboard");
            } else if ($user->type_of_business == 'fashion') {
                return redirect("/fashion_dashboard");
            } else if ($user->type_of_business == 'groceries') {
                return redirect("/groceries_dashboard");
            } else if ($user->type_of_business == 'mobiles') {
                return redirect("/mobiles_dashboard");
            } else if ($user->type_of_business == 'shoes') {
                return redirect("/shoes_dashboard");
            } else if ($user->type_of_business == 'top_offers') {
                return redirect("/top_offers_dashboard");
            } else {
                return redirect("/two_wheel_dashboard");
            }
            // return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error', "User is Not Authenticated")->with('email', $email);
            // return redirect()->back()->withErrors(['error' => 'User is Not Authenticated']);
        }
    }




    function forgotten_password()
    {
        return view('auth.forgotten_password');
    }

    function post_forgotten_password(Request $request)
    {
        $mobile = User::where('mobile', $request->mobile)->first();
        // dd($email);

        if ($mobile) {

            $mobile->update([
                'otp' => null,
                'expire_at' => null,
                'pin' => null
            ]);


            $app_key = config('app.alpha_app');
            $number = config('app.number');


            //Generate OTP
            // $user_otp = Otp_user::where('user_id',  $user->id)->latest()->first();
            $now = Carbon::now();
            // dd($now);
            $now_time_plus_10 = $now->addMinute(5);
            $mobile->update([
                'otp' => rand(1234, 9999),
                'expire_at' => $now_time_plus_10,
            ]);
            // dd($user);

            $userr = User::where('mobile', $request->mobile)->first();

            // dd($actual_Otp);

            $otpp = $userr->otp;
            // dd($otpp);

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('api_key' => $app_key, 'msg' => "Your Ztrios OTP Number:" . $otpp, 'to' => $number),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            // echo ("Message is Successfully Delivered to the Phone Number");

            $encrypt_id = Crypt::encrypt($userr->id);  //for sexurity purpose
            // dd($encrypt_id);
            return redirect('/further_otp/' . $encrypt_id);
        } else {

            return redirect()->back()->withErrors(['error' => "Whoops! Something went Wrong."]);
        }

        // return view();
    }


    public function further_otp()
    {
        return view('auth.further_otp');
    }

    public function  post_further_otp(Request $request)
    {

        $user = User::where('otp', $request->otp)->first();
        // dd($user);
        $now = Carbon::now();

        // $user && $now->isBefore($user->expire_at)
        if ($user) {
            return redirect('/reset_pin/' . $user->id);
        } else {
            return redirect()->back()->with('error', "Your OTP is Invalid");
        }
    }

    public function reset_pin($id)
    {

        $user =  User::where('id', $id)->first();

        return view('auth.reset_pin')->with('user_id', $user->id);
    }

    public function post_resetpin(Request $re, $id)
    {

        $user = User::where('id', $id)->first();

        $user->update([
            'pin' => $re->pin
        ]);

        // return redirect('/login');
        return redirect('/dashboard');
    }


    public function dashboard()
    {
        return view('Adminview.Inventory.Electronics.master');
    }
    public function logout()
    {
        return redirect('/login');
    }
}
