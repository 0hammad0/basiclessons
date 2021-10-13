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
                <a href='/resource/{{$products -> id}}/edit' class='btn btn-primary'> Edit </a>
                
                {{-- <a href='{{url('/delete', $products -> id)}}' class='btn btn-danger'>Delete</a> --}}
                

                {!!Form::open(['action' => ['ResourceController@destroy', $products -> id], 'class' => 'pull-right'])!!}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {!!Form::close()!!}
        </div>

@endsection