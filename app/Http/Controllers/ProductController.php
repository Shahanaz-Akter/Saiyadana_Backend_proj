<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    function ecommerce_dashboard()
    {
        return view('Adminview.Inventory.Ecommerce.master_branch');
    }

    function post_super_category(Request $re)
    {
        // dd($wre);

        Product::create([
            'super_category_name' => $re->super_category_name,
            'super_category_image' => $re->super_category_image,
            'unicode' => $re->unicode,
        ]);


        // dd($re->id);
        return redirect()->back();
    }


    function post_sub_category(Request $re)
    {

        dd($re->id);

        try {
            Product::where('id', $re->id)->update([
                'sub_category_primary_image' => $re->sub_category_primary_image,
                'sub_category_secondary_image' => $re->sub_category_secondary_image,
                'sub_category_name' => $re->sub_category_name,
                'price' => $re->price,
                'sku_code' => $re->sksku_codeu,
                'entry_date' => $re->entry_date,
                'expire_date' => $re->expire_date,
                'regular_price' => $re->regular_price,
                'discount_price' => $re->discount_price,
                'description' => $re->description
            ]);
        } catch (\Exception $e) {
            // Log the exception for debugging
            dd($e->getMessage());
        }

        return redirect()->back();
    }


    function ecommerce_shop()
    {
        return view('ecommerce_shop');
    }
}
