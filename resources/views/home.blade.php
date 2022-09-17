<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">

</head>
<body>
<header>
    <div id="notify">
        <div class="container">    
            <span>DC POWER VISA&copy</span>
            <span>OTHER DC SITES</span>
        </div>
    </div>
    <div class="container">
        <div class="header-nav">
            <figure>
                <img src="{{ asset('images/dc-logo.png')}} " alt="">
            </figure>
                <ul>
                    <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                    <li><a href="{{route('home')}}" class="active">COMICS</a></li>
                    <li><a href="#">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP</a></li>
                </ul>
        </div>
    </div>
</header>
<main>
    <div class="jumbotron"></div>
    <div class="main-content">
        <div class="container">
            <div class="current-series">
                <h2>
                    CURRENT SERIES
                </h2>
            </div>
            <div class="d-flex">
                @foreach($comics as $comic)
                <a href="#" class="comic-card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" class="comics">
                    <p class="comics-text">{{$comic['series']}}</p>
                </a>
                @endforeach
            </div>
            <div class="load-div text-center">
                <a href="#" class="load-button">LOAD MORE</a>
            </div>
        </div>
    </div>
</main>
<section id="nav-shop">
    <div class="container">
        <ul class="d-flex">
            <li class="d-flex">
                <a href="#"><img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="shop-logos"></a>
                <a href="#"><p>DIGITAL COMICS</p></a>
            </li>
            <li class="d-flex">
                <a href="#"><img src="{{asset('images/buy-comics-merchandise.png')}}" alt="" class="shop-logos"></a>
                <a href="#"><p>DC MERCHANDISE</p></a>
            </li>
            <li class="d-flex">
                <a href="#"><img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="" class="shop-logos"></a>
                <a href="#"><p>SUBSCRIPTIONS</p></a>
            </li>
            <li class="d-flex">
                <a href="#"><img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="" class="shop-logos"></a>
                <a href="#"><p>COMIC SHOP LOCATOR</p></a>
            </li>
            <li class="d-flex">
                <a href="#"><img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="" class="shop-logos"></a>
                <a href="#"><p>DC POWER VISA</p></a>
            </li>
        </ul>
    </div>
</section>
<footer>
    <div class="main-footer">
            <div class="container d-flex">
                <div class="DC-shop">
                    <div class="links">
                        <h4>DC COMICS</h4>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="links">
                        <h4>DC</h4>
                        <ul>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy policy(New)</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact US</a></li>
                        </ul>
                    </div>
                    <div class="links">
                        <h4>SITES</h4>
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                        </ul>
                    </div>
                    <div class="links">
                        <h4>SHOP</h4>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>
                </div>
                <figure>
                    <img src="{{asset('images/dc-logo-bg.png')}}" alt="logo DC background" id="logo-bg">
                </figure>
            </div>
        </div>
    </div>
    <div class="bottom-footer"></div>
</footer>
</body>
</html>