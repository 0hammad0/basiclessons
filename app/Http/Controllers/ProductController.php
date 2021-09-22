<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    public function create () {
        // $product = DB:: table ('products')->get();
        // $product = Product::all();

        return view('pages.create');
    }

    public function saveproduct (Request $request) {
        $data = new Product();
        $data -> name = $request -> name;
        $data -> price = $request -> price;
        $data -> description = $request -> description;

        $data -> save();

        Session::put('success', 'The product has been saved');

        return redirect()->back();
    }
}
