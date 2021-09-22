@extends('layouts.app')

@section('title')
        Services
@endsection

@section('content')

        <h1>Products</h1>

        @foreach ($products as $product)

        <div class="well">

                <h1> <a href="/show/{{$product->id}}"> {{$product -> name}} </a> </h1>

                <h2>{{$product -> price}} $</h2>
                
        </div>

        @endforeach
        
        {{ $products -> links() }}

@endsection