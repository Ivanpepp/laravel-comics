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
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
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
                                    <h1>{{$comic['title']}}</h1>
                                    <div class="price-wrapper">
                                        <div class="price">
                                            <div class="price-container">
                                                <span>U.S. Price:</span>
                                                <span> {{$comic['price']}}</span>
                                            </div>
                                            <span>aviable</span>
                                        </div>
                                        <span>Check Availability <i class="fas fa-caret-down"></i></span>
                                    </div>
                                    <p>{{$comic['description']}}</p>
                            </div>
                            
                            <img src="{{asset('images/pro-va.jpg')}}" alt="adv logo">
                        
                        </div>
                    </section>
                  
                    

                </div>
              
                
            </div>
            
        </div>
        <section id="specs-section">
            <div class="my-view">
                <div class="my-view2">
                    <div class="wrapper">
                        <div class="talent">
                            <h3>Talent</h3>
                            <div class="art">
                                <p class="subtitle">Art By:</p>
                                <p class="sub-descriprion">
                                    
                                    @for ($i=0; $i < count($comic['artists']); $i++)
                                        @if ($i == count($comic['artists']) -1)
                                        {{$comic['artists'][$i] . ' '}}
                                        @else
                                        {{$comic['artists'][$i] . ','}} 
                                        @endif
                                    @endfor
                                </p>
                            </div>
                            <div class="written">
                                <p class="subtitle">Written By:</p>
                                <p class="sub-descriprion">
                                    @for ($i=0; $i < count($comic['writers']); $i++)
                                        @if ($i == count($comic['writers']) -1)
                                        {{$comic['writers'][$i] . ' '}}
                                        @else
                                        {{$comic['writers'][$i] . ','}} 
                                        @endif
                                    @endfor
                                </p>
                            </div>
                        </div>
                        <div class="specs">
                            <h3>Specs</h3>
                            <div class="sub-specs">
                                <p>Series:</p>
                                <p>{{$comic['series']}}</p>
                            </div>
                            <div class="sub-specs">
                                <p>U.S. Price:</p>
                                <p>{{$comic['price']}}</p>
                            </div>
                            <div class="sub-specs">
                                <p>On Sale Date:</p>
                                <p>{{$comic['sale_date']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
    </div>
@endsection