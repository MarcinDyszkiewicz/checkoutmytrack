<html>
<head>
    <title>magExpress</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('header_css')

    {{--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="assets/css/animate.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="assets/css/slick.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="assets/css/theme.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="assets/css/style.css">--}}

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/animate.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/slick.cs')}}" rel="stylesheet"/>
    <link href="{{asset('css/theme.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>

    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>

    {{--<script src="{{asset('js/html5shiv.min.js')}}/"></script>--}}
    {{--<script src="{{asset('js/respond.min.js')}}/"></script>--}}
    @yield('header_script')

</head>
<body>
{{--<div id="preloader">--}}
    {{--<div id="status">&nbsp;</div>--}}
{{--</div>--}}
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="header_top">
                    <div class="header_top_left">
                        <ul class="top_nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="pages/page.html">About</a></li>
                            <li><a href="pages/contact.html">Contact</a></li>
                            <li><a href="pages/404.html">Error Page</a></li>
                        </ul>
                    </div>
                    <div class="header_top_right">
                        <form action="#" class="search_form">
                            <input type="text" placeholder="Text to Search">
                            <input type="submit" value="">
                        </form>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="header_bottom_left"><a class="logo" href="index.html">Check<strong>Out</strong> <span>A Pro Magazine Template</span></a></div>
                </div>
            </div>
        </div>
    </header>
    <div id="navarea">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav custom_nav">
                        <li class=""><a href="index.html">Home</a></li>
                        <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Archives</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="pages/archive-main.html">Archive</a></li>
                                <li><a href="pages/archive1.html">Archive 1</a></li>
                                <li><a href="pages/archive2.html">Archive 2</a></li>
                                <li><a href="pages/archive3.html">Archive 3</a></li>
                            </ul>
                        </li>
                        <li><a href="pages/single.html">Single page</a></li>
                        <li><a href="pages/contact.html">Contact</a></li>
                        <li><a href="pages/404.html">404 page</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@yield('content')
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom_left">
                        <p>Copyright &copy; 2045 <a href="index.html">magExpress</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom_right">
                        <p>Developed BY Wpfreeware</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
@yield('footer_scripts')
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>