<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function create () {
        // $product = DB:: table ('products')->get();
        // $product = Product::all();

        return view('pages.create');
    }

    public function save () {
        // print('create page');
    }
}
