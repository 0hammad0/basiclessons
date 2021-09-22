@extends('layouts.app')

@section('title')
        create
@endsection

@section('content')
        <form action="{{url('/save')}}" method="POST" class="form-horizontal">
            {{csrf_field()}}
            {{-- @csrf --}}

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
                <textarea name="description" id="description" cols="145" rows="5" class="form-control"> </textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Add Product">

        </form>
@endsection