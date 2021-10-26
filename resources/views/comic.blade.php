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
                                            <div class="price-container">
                                                <span>U.S. Price:</span>
                                                <span> soldi dinamici</span>
                                            </div>
                                            <span>aviable</span>
                                        </div>
                                        <span>Check Availability <i class="fas fa-caret-down"></i></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas atque exercitationem in optio reiciendis molestiae dignissimos nisi deserunt odit cumque quaerat eius labore amet velit aliquam excepturi, iusto placeat debitis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos earum autem in, necessitatibus nobis dolorem! Ab magni aut nostrum tempore deleniti earum sint modi officia ullam explicabo, est deserunt nulla. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, magni aliquam officia odit nemo itaque nulla sit magnam, maiores nobis distinctio laborum? Veritatis porro cum, quae quia commodi ipsam deleniti!</p>
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
                                <p class="sub-descriprion">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae iusto maiores, culpa reprehenderit voluptatum tempore doloremque magnam? Animi </p>
                            </div>
                            <div class="written">
                                <p class="subtitle">Written By:</p>
                                <p class="sub-descriprion">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae iusto maiores, culpa reprehenderit voluptatum tempore doloremque magnam? Animi </p>
                            </div>
                        </div>
                        <div class="specs">
                            <h3>Specs</h3>
                            <div class="sub-specs">
                                <p>Series:</p>
                                <p>action comics</p>
                            </div>
                            <div class="sub-specs">
                                <p>U.S. Price:</p>
                                <p>soldi dinamici</p>
                            </div>
                            <div class="sub-specs">
                                <p>On Sale Date:</p>
                                <p>data dinamicaa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </div>
@endsection