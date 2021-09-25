<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(3);
        return view('resources/services') -> with ('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate ($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image|nullable|max:1999'
         ] );

        print('this is '.$request -> image);

        echo '<pre></pre>';
        $imagename1 = $request -> image -> getClientOriginalName();
        print ('This origanl name of image '. $imagename1);

        echo '<pre></pre>';
        $nameimage = pathinfo($imagename1, PATHINFO_FILENAME);
        print ('This origanl name of image '. $nameimage);

        echo '<pre></pre>';
        $image = $request->image;
        $imagename2 = time().'.'.$image->getClientOriginalExtension();
        print ('this is the image '.$imagename2);

        echo '<pre></pre>';
        $ext = $image -> getClientOriginalExtension();// only extention
        $imagenameext = $image -> getClientOriginalName() ;// getting name with extention (like image.jpg etc)
        $imagename = pathinfo($imagenameext, PATHINFO_FILENAME);//getting name with out extention
        $nameofimage = $imagename.'_'.time().'.'.$ext;//giving time as name
        print('many likha ha ya ' .$nameofimage);

        // $request->image->move('chefimage', $imagename);// to save in data base and folder

        // $data = new Product();
        // $data -> name = $request -> name;
        // $data -> price = $request -> price;
        // $data -> description = $request -> description;

        // $data -> save();

        // Session::put ('success', 'Product added');

        // return redirect('/resource');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);

        // return view ('/resources.showproduct')->with('products', $products);
        return view ('/resources.showproduct', compact ('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product :: find ($id);

        // return view ('pages.edit', compact ('product'));
        return view ('pages.edit') -> with ('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product -> name = $request -> name;
        $product -> price = $request -> price;
        $product -> description = $request -> description;

        $product -> update();

        Session::put('update', 'The product has been updated');

        return redirect('/resource');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product :: Find ($id);

        $product -> delete ();

        Session::put('update', 'The product has been deleted');

        return redirect ('/resource');
    }
}
