<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shakhboz-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl-carousel/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/forms.css') }}" rel="stylesheet">
</head>
<body>
<section id="header" class="vh">
    <nav class="navbar navbar-expand-lg navbar-inverse">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{URL::asset('/img/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Foods</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(!auth()->check())
                        <li><a href="{{route('login')}}">Sign In</a></li>
                    @else
                        <li><a href="{{route('my-orders')}}">Cabinet</a></li>
                    @endif
                    <li><a href="#">Call center +998 97 7067633</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-6 col-xs-12 p-5 ">
                    <h1>
                        Lorem ipsum dolor sit amet
                    </h1>
                    <p>Lorem ipsum dolor, sit amet consectetur a ullam, laborum.

                    </p>

                    <a href="#" class="order-button">Order Now</a>

                    <img src="" alt="">
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 col-xs-12 bg-image">
                    <img src="{{URL::asset('/img/bg.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <svg id="curve" ,="" data-name="waves" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1416.99 174.01">
        <path class="cls-1" d="M0, 280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z"
              transform="translate(0 -135.53)"></path>
    </svg>
</section>
<section class="content bg-white">
    @yield('content')
</section>
<section class="contact">
    <div class="container d-flex justify-content-center">
        <div class="contact-details ">
            <div class="container p-5">
                <h4>Contacts</h4>
                <strong><i class="fa fa-phone"></i> Phone: </strong>
                <span> +998 97 70676633</span>
                <br>
                <strong><i class="fa fa-at"></i> Email: </strong>
                <span> info@email.com</span>
                <br>
                <strong><i class="fa fa-map-marker-alt"></i> Address: </strong>
                <span>Ziyolilar 32, <br>Mirzo Ulugbek</span>

            </div>
            <div class="contact-form text-center">
                <form class="" method="post">
                    <div class="p-5">
                        <h3>Feel free to Contact</h3>
                        <p>Lorem ipsum dolor sit amet Maxime </p>
                        <input name="name" type="text" class="form-control" placeholder="Your Name">
                        <input name="email" type="email" class="form-control" placeholder="Your Email">
                        <textarea name="message" type="textarea" row="10" class="form-control" valu="Message...">                            </textarea>
                    </div>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="footer">
    <footer class="pt-4">
        <div class="container text-center text-md-left">

            <nav class="navbar navbar-expand-lg navbar-inverse">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="{{URL::asset('/img/Logo1.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Foods</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            <li><a href="#">Call center +998 97 7067633</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <hr>

            <div class="container text-center copyright">
                © 2019 FastOrder
            </div>
        </div>


    </footer>

</section>
</body>
</html>
