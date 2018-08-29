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

    <form method="POST" action="/quotes">

        <div class="form-group">
            
            <label for="title">Judul</label>

            <input type="text" name="title" class="form-control" value="{{old('title')}}"  placeholder="Tulis judul disini">

        </div>

        <div class="form-group">
            <label for="subject">Isi Kutipan</label>
            <textarea class="form-control" name="subject" rows="8" cols="80">{{old('subject')}}</textarea>
        </div>

        {{ csrf_field() }}

        <button type="submit" class="btn btn-default" value="Submit">Submit</button>
    </form>
    
</div>
@endsection
