<footer>
    <div class="my-view">
        
        <div class="flex">
            <div class="container">
                <ul>
                    <li>
                        <h2>dc comics</h2>
                    </li>
                        @foreach ($links as $link)
                            <li >
                                <a class="{{request()->routeIs($link['route']) ? 'active' : ''}}"  href="{{route($link['route'])}}">{{$link['text']}}</a>
                            </li>
                        @endforeach
                </ul>
                <ul>
                    <h2>shop</h2>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC Collectbles</a></li>
        
                </ul>
            </div>
            <div class="container">
                <ul>
                    <h2>dc</h2>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    
        
                </ul>
            </div>
            <div class="container">
                <ul>
                    <h2>sites</h2>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>
                    <li><a href="#">shop DC</a></li>        
                </ul>
            </div>
        </div>
        
        <figure>
            <img src="{{asset('images/dc-logo-bg.png')}}" alt="dc big footer logo">
        </figure>

    </div>
    <section class="lower-footer">
        <div class="my-view">
            prova
        </div>
    </section>
   
   
</footer>