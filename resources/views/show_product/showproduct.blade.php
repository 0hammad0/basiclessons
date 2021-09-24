@extends('layouts.app')

@section('title')
        Show Product
@endsection

@section('content')

        <h1>
                {{$products -> name}} Product Details
        </h1>

        <div class="well">

                <h2>{{$products -> price}} $</h2>

                <p>{{$products -> description}}</p>

                <hr>
                <h3>Written at {{$products -> created_at}}</h3>

                <hr>
                <a href='{{url('/edit', $products -> id)}}' class='btn btn-primary'> Edit </a>
                
                <a href='{{url('/delete', $products -> id)}}' class='btn btn-danger'>Delete</a>
        </div>


@endsection