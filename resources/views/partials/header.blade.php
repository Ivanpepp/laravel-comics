<header>

    <nav class="my-view">
        <ul class="header-list">
            <li id="dc-logo">
                <img src="{{asset('images/dc-logo.png')}}" alt="Dc main logo">
            </li>
            @foreach ($links as $link)
                <li class="{{request()->routeIs($link['route']) ? 'active' : ''}}" >
                    <a href="{{route($link['route'])}}">{{$link['text']}}</a>
                </li>
            @endforeach
            <!-- <li>
                <a href="{{route('characters')}}">characters</a>
            </li>
            <li>
                <a href="{{route('comics')}}">comics</a>
            </li> -->

        </ul>
    </nav>
   
</header>