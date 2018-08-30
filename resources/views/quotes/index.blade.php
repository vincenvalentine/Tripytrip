@extends('layouts.app')

@section('content')
<title>coba coba</title>
<div class="container">

<style type="text/css"></style>
      <div class= "header-container">
      <div class= "video-container">
          <video preload ="true" autoplay = "autoplay" loop = "loop" volume = "0" poster = "pic.jpg">

            <source src = "video/Sequence 01.mp4" type = "video/mp4" >

            
          </video>
          
      </div>
    </div>


    @if (session('msg'))
    <div class="alert alert-success">

        <p>{{ session('msg') }}</p>

    </div>

    @endif



    <div class="row">
        @foreach ($quotes as $quote)
           <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">{{$quote->title}}</div>
                <p><a href="/quotes/{{$quote->slug}}" class="btn btn-primary">Lihat Kutipan</a></p>        
        </div>

        </div>

        @endforeach

    </div>
    
</div>
@endsection
