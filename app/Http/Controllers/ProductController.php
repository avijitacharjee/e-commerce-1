<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function products(Request $request){
        $product = Product::all();
        return view('products.products',[
            'product'=>$product
        ]);
    }
}
