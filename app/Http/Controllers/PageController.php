<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;

class PageController extends Controller
{
    public function getIndex(){
    	return view('pages.content');
    }

    public function getProduct(Request $req){
    	$product = Product::where('id',$req->id)->first();
    	return view('pages.product', compact('product'));
    }

    public function getSearch(Request $req){
    	$product = Product::where('name','like','%'.$req->key.'%')->get();
    	return view('pages.search', compact('product'));
    }

    public function getDanhsach(){
        $product = Product::where('name','like','%'.$req->key.'%')->get();
        return view('pages.danhsach', compact('product'));
    }
}
