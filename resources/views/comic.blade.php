@extends('layouts.main')


@section('titolo', 'action comics # 1000 ecc ecc')
  
@section('content')
    <div id="comic">
        <div class="jumbo-wrapper">
            <div class="main-jumbo ">
                <img src="{{asset('images/jumbotron.jpg')}}" alt="jumbo image">
            </div>
            <div class="blue-line"></div>
            <div class="my-view">
                <div class="my-view2">
                    <div class="card-wrapper">
                        <div class="card">
                            <img src="https://via.placeholder.com/190x250" alt="">
                            <span class="upper-sticker sticker" >comic book</span>
                            <span class="lower-sticker sticker">view galley</span>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
          
    </div>
@endsection