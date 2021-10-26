@extends('layouts.main')


@section('titolo', 'Comics')

@section('content')


<div id="comics">
    <div class="main-jumbo ">
      <img src="{{asset('images/jumbotron.jpg')}}" alt="jumbo image">
        <div class="my-view">
          <button class="btn-primary">current series</button>
        </div>
    </div>
    <div class="card-wrapper my-view">
      @foreach ($banners as $banner)
      <div class="comics-card">
        <a href="{{route('comic', ['id' => $loop->index])}}">
          <img src="{{$banner['thumb']}}" alt="{{$banner['series']}}">
          <p>{{$banner['series']}}</p>
        </a>
      </div>
      @endforeach
    </div>
    <div class="btn-wrapper">
      <button class="btn-primary">load more</button>
    </div>
   
</div>


@endsection