<header>
    <div id="logo">
        <img src=" {{ asset('img/logo.png')}}" alt="">
    </div>
    <div class="main-menu">
        <ul>
            <li>
                <a href="{{ route('page_home')}}">Home</a>
            </li>
            <li>
                <a href="{{ route('page_products')}}">Prodotti</a>
            </li>
            <li>
                <a href="{{ route('page_news')}}">News</a>
            </li>
        </ul>
    </div>
</header>