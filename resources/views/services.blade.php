@extends('layouts.app')

@section('title')
        Services
@endsection

@section('content')

        <h1>Products</h1>

        @foreach ($products as $products)

        <div class="well">

                <h1> <a href="/show/{{$products->id}}"> {{$products -> name}} </a> </h1>

                <h2>{{$products -> price}} $</h2>
                
        </div>

        @endforeach
        
        {{-- {{ $products->links() }} --}}

@endsection