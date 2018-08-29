@extends('layouts.app')

@section('content')
<title>coba coba</title>

<div class="container">

    <div class="jumbotron">

        <h1>{{$quote->title}}</h1>

        <p>{{$quote->subject}}</p>

        <p>Created by: {{$quote->user->name}}</p>

        <p><a href="/quotes" class="btn btn-primary btn-lg">Kembali Ke daftar</a></p>
    
        @if($quote->isOwner())

            <p id="edit"><a href="/quotes/{{$quote->id}}/edit" class="btn btn-primary btn-success">edit</a></p> 
                <form method="POST" action="/quotes/{{$quote->id}}">
                    {{ csrf_field() }}

        <input type="hidden" name="_method" value="DELETE">
            <button id="delete" type="submit" class="btn btn-danger" value="Submit">Delete</button>
                </form>
        @endif
    </div>

</div>

@endsection
