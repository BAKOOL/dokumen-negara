<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function search(Request $request){
        $search = $request->search;
        $product = DB::table('product')->where('name','like',"%".$search."%")->paginate(6);

        return view('index', ['product' => $product]);
    }

    public function index(){
        $product = DB::table('product')->paginate(6);

        return view('index',['product' => $product]);
    }
    public function product($id){
        $product = Product::find($id);

    }
}
