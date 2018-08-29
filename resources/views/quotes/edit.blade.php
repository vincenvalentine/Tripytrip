@extends('layouts.app')

@section('content')
<div class="container">

    @if (count($errors) > 0)
    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach

        </ul>
    </div>

    @endif

    <form method="POST" action="/quotes/{{$quote->id}}">

        <div class="form-group">
            
            <label for="title">Judul</label>

            <input type="text" name="title" class="form-control" 
                value="{{(old('title')) ? old('title') : $quote->title}}"  placeholder="Tulis judul disini">

        </div>

        <div class="form-group">
            <label for="subject">Isi Kutipan</label>
            <textarea class="form-control" name="subject" rows="8" cols="80">
                {{(old('subject')) ? old('subject') : $quote->subject}}</textarea>
        </div>

        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PUT">

        <button type="submit" class="btn btn-default" value="Submit">Edit kutipan</button>
    </form>
    
</div>
@endsection
