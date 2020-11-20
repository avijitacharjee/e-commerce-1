<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(Request $request){
        $product = Product::all();
        return view('products',[
            'product'=>$product
        ]);
    }
}
