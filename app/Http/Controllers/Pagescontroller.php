<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productcategories;
use Illuminate\Http\Request;

class Pagescontroller extends Controller
{

    public function index(Request $request){
        if($request->has('search')){
            $productresult = Product::where('product_name', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $productresult = Product::all();
        }
        return view('home')->with([
            'category' => Productcategories::all(),
            'productresult' => $productresult
        ]);
    }

    public function admin(){
        return view('admin')->with([
            'product' => Product::all(),
            'category' => Productcategories::all()
        ]);
    }

    public function search(Request $request){

    }
}
