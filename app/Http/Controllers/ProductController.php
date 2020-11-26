<?php

namespace App\Http\Controllers;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{



    public function index(){
        $products  = Product::all();
           $response["products"] = $products;
           $response["success"] = 1;
        return response()->json($response);
    }
    
    public function createProduct(Request $request){
        $product = Product::create($request->all());
        return response()->json($product);
    }


    public function updateProduct(Request $request, $id){
        $product  = DB::table('products')->where('pid',$request->input('pid'))->get();
           $product->name = $request->input('name');
           $product->price = $request->input('price');
           $product->description = $request->input('description');
           $product->save();
           $response["products"] = $product;
           $response["success"] = 1;
        return response()->json($response);
    }
    
    public function deleteProduct($id){
        $product  = DB::table('products')->where('pid',$request->input('pid'))->get();
        $product->delete();
        return response()->json('Removed successfully.');
    }
    


}
