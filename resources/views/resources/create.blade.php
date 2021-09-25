@extends('layouts.app')

@section('title')
        create
@endsection

@section('content')

    @if(Session::has('success'))
    
        <div class="alert alert-success">
        {{Session::get('success')}}
        {{Session::put('success', null)}}
        </div>

    @endif

        {{-- <form action="{{url('/saveproduct')}}" method="POST" class="form-horizontal">
                @csrf
            {{csrf_field()}}

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" placeholder="Product Name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Product Price</label>
                <input type="text" name="price" placeholder="Product Price" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Product Description</label>
                <textarea name="description" id="description" cols="145" rows="7" class="form-control" required> </textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Add Product">

        </form> --}}



        {!!Form::open(['action' => 'ResourceController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' , 'class' => 'form-horizontal'])!!}

        <div class="form-group">
        {{Form::label('', 'Name')}}
        {{Form::text('name', '', ['placeholder' => 'Product Name', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
        {{Form::label('', 'Price')}}
        {{Form::text('price', '', ['placeholder' => 'Product price', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('', 'Product Image')}}
            {{Form::file('image', ['class' => 'form-control'])}}
            </div>

        <div class="form-group">
        {{Form::label('', 'Description')}}
        {{Form::textarea('description', '', ['placeholder' => 'Product description', 'class'=> 'form-control'])}}
        </div>

        <div class="form-group">
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        </div>

        {!!Form::close()!!}

@endsection
