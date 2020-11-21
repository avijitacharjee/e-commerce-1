<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    function products(Request $request){
        $product = Product::all();
        return view('products.products',[
            'products'=>$product
        ]);
    }
    function insert_get(Request $request){
        return view('products.insert');
    }
    function insert(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        //$product->images = "";
        if($request->hasFile('images') || true){
            $product->images = $this->images($request->file('images'));
        }
        if($product->save()){
            return json_encode([
                'msg'=>'Successfully saved'
            ]);
        }else {
            return json_encode([
                'msg'=>'failed to save'
            ]);
        }
    }
    function images($images){
        $names="";
        $i=0;
        foreach ($images as $image) {
            $name = $i+time();
            $img = Image::make($image);
            $img->save(public_path()."\gallery\images\\" . $name . ".jpg" ,100);
            if($i==0){
                $names=$name;
            }else {
                $names = $names .",".$name;
            }
            $i++;
        }
        return $names;
    }
    function update(Request $request,$id){
        return 'updated';
    }
}
