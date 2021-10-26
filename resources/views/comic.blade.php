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
                <div class="my-view2">
                    <section id="description-section">
                        <p class="adv">advertisement</p>
                        <div class="description-wrapper">
                            <div class="description">
                                    <h1>Action comics #1000 ecc ecc ecc</h1>
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <span>U.S. Price:</span>
                                            <span> soldi dinamici</span>
                                            <span class="right">aviable</span>
                                        </div>
                                        
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, magni aliquam officia odit nemo itaque nulla sit magnam, maiores nobis distinctio laborum? Veritatis porro cum, quae quia commodi ipsam deleniti!</p>
                            </div>
                            
                            <img src="{{asset('images/pro-va.jpg')}}" alt="adv logo">
                        
                        </div>
                    </section>
                    

                </div>
                
            </div>
            
        </div>
          
    </div>
@endsection