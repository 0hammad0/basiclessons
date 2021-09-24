<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Session;

class UpdateProductController extends Controller
{
    public function edit ($id) {
        $product = Product :: find ($id);

        // return view ('pages.edit', compact ('product'));
        return view ('pages.edit') -> with ('product', $product);
    }

    public function edit_product ($id, Request $request) {
        // $product = new Product;
        $product = Product::find($id);

        $product -> name = $request -> name;
        $product -> price = $request -> price;
        $product -> description = $request -> description;

        $product -> update();

        Session::put('update', 'The product has been updated');

        return redirect('/services');
    }

    public function delete_product ($id, Request $request) {
        $product = Product::find($id);

        $product -> delete();

        Session::put('deleted', 'The Product has been deleted');

        return redirect('/services');
    }
}
