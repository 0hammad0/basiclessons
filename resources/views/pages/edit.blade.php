@extends('layouts.app')

@section('title')
        create
@endsection

@section('content')

    @if(Session::has('update'))
    
        <div class="alert alert-success">
        {{Session::get('success')}}
        {{Session::put('update', null)}}
        </div>

    @endif

        {{-- <form action="{{url('/edit_product', $product -> id)}}" method="post" class="form-horizontal">
                @csrf
            {{csrf_field()}}

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" value="{{ $product -> name}}" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Product Price</label>
                <input type="text" name="price" value="{{ $product -> price}}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Product Description</label>
                <textarea name="description" id="description" cols="145" rows="5" class="form-control" required>{{ $product -> description}}</textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Add Product">

            <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>

        </form> --}}



        {!!Form::open(['action' => ['UpdateProductController@edit_product',$product->id], 'method' => 'POST', 'class' => 'form-horizontal'])!!}

        {{csrf_field()}}
        {{-- @csrf --}}

        {{Form::hidden('id', $product -> id)}}

        <div class="form-group">
        {{Form::label('', 'Name')}}
        {{Form::text('name', $product -> name, ['placeholder' => 'Product Name', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
        {{Form::label('', 'Price')}}
        {{Form::text('price', $product -> price, ['placeholder' => 'Product price', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
        {{Form::label('', 'Description')}}
        {{Form::textarea('description', $product -> description, ['placeholder' => 'Product description', 'class'=> 'form-control'])}}
        </div>

        <div class="form-group">
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}}

        <a href="{{ url('/services') }}" class="btn btn-default">Back</a>
        </div>

        {!!Form::close()!!}

@endsection
