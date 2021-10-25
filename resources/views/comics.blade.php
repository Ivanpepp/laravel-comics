@extends('layouts.main')


@section('titolo', 'Comics')

@section('content')


<div class="main-jumbo ">
    <img src="{{asset('images/jumbotron.jpg')}}" alt="jumbo image">
      <div class="my-view">
        <button class="btn-primary">current series</button>
      </div>
</div>


@endsection