<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class WelcomeController extends Controller
{
    // public function welcome () {
    //     return view('welcome');
    // }

    public function about () {
        return view('about');
    }

    public function index () {
        return view('index');
    }
    
    public function services () {
        $products = DB :: table ('products') -> paginate(3);
        // $products = Product::all();

        // return view('services') -> with('products', $products);
        return view('services', compact ('products'));
    }

    public function show_product ($id) {
        // $products = DB::table('products')
        // ->where('id', $id)
        // ->first();

        $products = Product::find($id);

        // return view('show_product.showproduct')->with('products', $products);
        
        return view('show_product.showproduct', compact('products'));
    }
}
