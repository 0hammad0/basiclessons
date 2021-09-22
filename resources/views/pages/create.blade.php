@extends('layouts.app')

@section('title')
        create
@endsection

@section('content')
        <form action="{{url('/saveproduct')}}" method="post" class="form-horizontal">
            {{csrf_field()}}

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" placeholder="Product Name" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Product Price</label>
                <input type="text" name="Price" placeholder="Product Price" class="form-control">
            </div>

            <div class="form-group">
                <label>Product Description</label>
                <textarea name="description" id="description" cols="145" rows="5" placeholder="Product description"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" name="save" value="Add Product">

        </form>
@endsection