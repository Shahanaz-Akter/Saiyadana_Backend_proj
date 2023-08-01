<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{

    // login method
    public function login()
    {
        return view('auth.login');
    }
    // login post method
    public function post_login(Request $re)
    {
        $email = $re->email_or_phn;
        $pass = $re->pass;
        $credentials = ['email' => $email, 'password' => $pass];
        if (Auth::attempt($credentials)) {
            return redirect('http://localhost/pagebuilderztrios/views/pages.html');
        } else {
            return redirect()->back()->with('error', "User is Not Authenticated")->with('email', $email);
        }
    }
    // signup method
    public function signUp()
    {
        return view('auth.signup');
    }
    // send OTP for signup   
    public function sendOtp(Request $re)
    {
        $data = $re->validate([
            'first_name' => 'required|string|min:4|max:255',
            'last_name' => 'required|string|min:4|max:255',
            'user_name' => 'required|string|min:4|max:255',
            'email' => 'required|email|min:4|max:255|unique:users',
            'mobile' => 'required|min:4|max:255|unique:users',
        ]);
        $user = User::create($data);

        $app_key = config('app.alpha_app');
        $number = config('app.number');

        $this->generateOtp($user->id); //76w36476767

        $userr = User::where('id', $user->id)->first();
        $otpp = $userr->otp;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('api_key' => $app_key, 'msg' => "Your Ztrios OTP Number:" . $otpp, 'to' => $number),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $encrypt_id = Crypt::encrypt($userr->id);  //for security purpose
        // dd($encrypt_id);
        return redirect('/otp/' . $encrypt_id);
    }
    // generate the otp
    public function generateOtp($user_id)
    {
        $now = Carbon::now();
        $now_time_plus_10 = $now->addMinute(5);
        $user = User::where('id', $user_id)->first();
        return  $user->update([
            'otp' => rand(1234, 9999),
            'expire_at' => $now_time_plus_10,
        ]);
    }
    // show otp page
    public function Otp($id)
    {
        $decrypt_id =  Crypt::decrypt($id);
        return view('auth.otp')->with('id', $decrypt_id)->with('encrypted_id', $id);
    }
    // post the otp in the database
    public function post_Otp(Request $request, $id)
    {
        $decrypted_id =  Crypt::decrypt($id);
        $user = User::where('id', $decrypted_id)->first();
        $now = Carbon::now();
        if ($user && $now->isBefore($user->expire_at)) {

            return redirect('/tob/' . $id);
        } else {
            return redirect()->back()->with('error', "Your OTP is Invalid");
        }
    }
    // ASK FOR BUSINESS TYPE
    public function tob($id)
    {
        $id =  Crypt::decrypt($id);
        $encrypted_id =  Crypt::encrypt($id);
        $user = user::where('id', $id)->first();
        return view('auth.type_of_business')->with('user', $user)->with('encrypted_id', $encrypted_id);
    }
    // BUSINESS TYPE UPDATE
    public function post_tob(Request $re, $id)
    {
        $id =  Crypt::decrypt($id);
        $encrypted_id =  Crypt::encrypt($id);
        $user = User::where('id', $id)->first();
        $user->update(
            [
                'type_of_business' => $re->business
            ]
        );
        return redirect('/location/' . $encrypted_id);
    }
    // ASK FOR LOCATION
    public function location($id)
    {
        $decrypt_id =  Crypt::decrypt($id);
        $user = user::where('id', $decrypt_id)->first();
        return view('auth.business_location')->with('user', $user)->with('encrypted_id', $id);
    }
    // POST LOCATION TO DATABASE
    public function post_location(Request $re, $id)
    {
        $decrypt_id =  Crypt::decrypt($id);
        $user = user::where('id', $decrypt_id)->first();
        $user->update([
            'district' => $re->district,
            'city' => $re->city,
            'road' => $re->road,
            'zipcode' => $re->zipcode,
            'house' => $re->house
        ]);
        return redirect("/pin/" . $id);
    }
    // PIN GENERATION
    public function pin($id)
    {
        $decrypt_id =  Crypt::decrypt($id);
        $user = User::where('id', $decrypt_id)->first();
        $change = gettype($user->id);
        return view('auth.pin_generate')->with('user_id', $user->id)->with('encrypted_id', $id);
    }
    // POST PIN GENERATION
    public function post_pin(Request $re, $user_id)
    {
        $decrypt_id =  Crypt::decrypt($user_id);
        $user = user::where('id', $decrypt_id)->first();
        $user->update([
            'password' => Hash::make($re->new_pin),
            'pin' => $re->new_pin
        ]);
        $result = Auth::attempt([
            'email' => $user->email,
            'password' => $re->new_pin,
        ]);
        if ($result) {
            return redirect("/dashboard");
        } else {
            return redirect("/login");
        }
    }
    // FORGOTTEN PASSWORD
    function forgotten_password()
    {
        return view('auth.forgotten_password');
    }
    // POST FORGOTTEN PASSWORD
    function post_forgotten_password(Request $request)
    {
        $user = User::where('mobile', $request->mobile)->first();
        if ($user) {
            $user->update([
                'otp' => null,
                'expire_at' => null,
                'pin' => null,
                'password' => null
            ]);
            $app_key = config('app.alpha_app');
            $number = config('app.number');
            $now = Carbon::now();
            $now_time_plus_10 = $now->addMinute(5);
            $new_otp_ = rand(1234, 9999);
            $user->update([
                'otp' => $new_otp_,
                'expire_at' => $now_time_plus_10,
            ]);


            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('api_key' => $app_key, 'msg' => "Your Ztrios OTP Number:" . $new_otp_, 'to' => $number),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            // echo ("Message is Successfully Delivered to the Phone Number");

            $encrypt_id = Crypt::encrypt($user->id);  //for sexurity purpose
            // dd($encrypt_id);
            return redirect('/further_otp/' . $encrypt_id);
        } else {

            return redirect()->back()->withErrors(['error' => "Whoops! Something went Wrong."]);
        }

        // return view();
    }
    // AGAIN OTP 
    public function further_otp()
    {
        return view('auth.further_otp');
    }
    // AGAIN OTP POST
    public function  post_further_otp(Request $request)
    {
        $user = User::where('otp', $request->otp)->first();
        $encrypt_id = Crypt::encrypt($user->id);
        $now = Carbon::now();
        if ($user && $now->isBefore($user->expire_at)) {
            return redirect('/reset_pin/' . $encrypt_id);
        } else {
            return redirect()->back()->with('error', "Your OTP is Invalid");
        }
    }
    // RESET PIN
    public function reset_pin($id)
    {
        $decrypt_id = Crypt::decrypt($id);
        $user =  User::where('id', $decrypt_id)->first();
        return view('auth.reset_pin')->with('user_id', $id);
    }
    // RESET PIN POST
    public function post_resetpin(Request $re, $id)
    {
        $decrypt_id = Crypt::decrypt($id);
        $user = User::where('id', $decrypt_id)->first();
        $user->update([
            'pin' => $re->pin,
            'password' => Hash::make($re->pin)
        ]);
        $result = Auth::attempt([
            'email' => $user->email,
            'password' => $re->pin
        ]);
        if ($result) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }
    // RESEND OTP
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
    // DASHBOARD PAGE
    public function dashboard()
    {
        return view('inventory.home');
    }
}
