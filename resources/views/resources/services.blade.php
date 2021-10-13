@extends('layouts.app')

@section('title')
        Services
@endsection

@section('content')

        <h1>Products</h1>

        @if(Session::has('success'))
        <div class="alert alert-success">
        {{Session::get('success')}}
        {{Session::put('success', null)}}
        </div>
        @endif

        @if(Session::has('update'))
        <div class="alert alert-success">
        {{Session::get('update')}}
        {{Session::put('update', null)}}
        </div>
        @endif
        
        @if(Session::has('delete'))
        <div class="alert alert-success">
        {{Session::get('delete')}}
        {{Session::put('delete', null)}}
        </div>
        @endif

        @foreach ($products as $product)

        <div class="well">

                <h1> {{$product -> name}} </h1>

                <h2>{{$product -> price}} $</h2>

                <a href="/resource/{{$product -> id}}" class='btn btn-deafult'>Show Details</a>
                
        </div>

        @endforeach
        
        {{ $products -> links() }}

@endsection