 
<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content>
        <meta name="author" content>
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>{{ $title ?? 'Page Title' }}</title>
 
        <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('website/assets/css/font-awesome.min.css') }}">
        <!-- Lightbox -->
        <link rel="stylesheet" href="{{ asset('website/assets/glightbox/css/glightbox.css') }}">
        <!-- Flex Slider -->
        <link rel="stylesheet" href="{{ asset('website/assets/css/flexslider.css') }}">
        <!-- Animation -->
        <link rel="stylesheet" href="{{ asset('website/assets/css/animate.min.css') }}">
        <!-- Slick Carousel -->
        <link rel="stylesheet" href="{{ asset('website/assets/css/slick.css') }}">
        <!-- Select Style -->
        <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap-select.min.css') }}">
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('website/assets/css/main.css') }}" id="theme">
        <!-- Change color theme -->
        <link rel="stylesheet" href="{{ asset('website/style-switcher.css') }}">
        

        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LVXK7E41MJ"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-LVXK7E41MJ');
        </script>
    </head>

    <body> 
        <!-- <div id="preloader">
            <div class="cssload-container">
                <div class="cssload-double-torus"></div>
            </div>
        </div>   -->

        <!-- @include('components/imports/color_switcher') -->
        <!-- NAVBAR
        ===============================================================--> 
    
        @livewire('nav')
        {{ $slot }}
        

        @include('components/imports/footer')
        <!-- JAVASCRIPT
        ===============================================================-->
        <!-- JQuery --> 
        <script src="{{ asset('website/assets/js/jquery-3.6.1.min.js') }}"></script>
        <script src="{{ asset('website/assets/js/jquery-migrate-3.4.0.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('website/js/popper.min.js') }}"></script>
        <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
        <!-- Glightbox -->
        <script src="{{ asset('website/assets/glightbox/js/glightbox.min.js') }}"></script>
        <!-- Slick Carousel -->
        <script src="{{ asset('website/assets/js/slick.min.js') }}"></script>
        <!-- Select Style -->
        <script src="{{ asset('website/assets/js/bootstrap-select.min.js') }}"></script>
        <!-- Flexslider -->
        <script src="{{ asset('website/assets/js/jquery.flexslider-min.js') }}"></script>
        <!-- Placeholder for IE9 -->
        <script src="{{ asset('website/assets/js/jquery.placeholder.min.js') }}"></script>
        <!-- Animation -->
        <script src="{{ asset('website/assets/js/wow.min.js') }}"></script>
        <!-- Main -->

        <script src="{{asset('website/assets/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{ asset('website/assets/js/main.js') }}"></script>


        <script>
            (function ($) {
                $(document).ready(function () {
                    $('#toggle-switcher').click(function () {
                        if ($(this).hasClass('opened')) {
                            $(this).removeClass('opened');
                            $('#style-switcher').animate({ 'right': '-175px' });
                        } else {
                            $(this).addClass('opened');
                            $('#style-switcher').animate({ 'right': '-15px' });
                        }
                    });
                    $('#bluetheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo.png');
                    });
                    $('#greentheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-green.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-green.png');
                    });
                    $('#redtheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-red.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-red.png');
                    });
                    $('#gardentheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-garden.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-garden.png');
                    });
                    $('#aquatheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-aqua.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-aqua.png');
                    });
                    $('#lilactheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-lilac.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-lilac.png');
                    });
                    $('#ambertheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-amber.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-amber.png');
                    });
                    $('#browntheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-brown.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-brown.png');
                    });
                    $('#cyantheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-cyan.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-cyan.png');
                    });
                    $('#dorangetheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-deep-orange.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-deep-orange.png');
                    });
                    $('#dpurpletheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-deep-purple.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-deep-purple.png');
                    });
                    $('#indigotheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-indigo.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-indigo.png');
                    });
                    $('#limetheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-lime.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-lime.png');
                    });
                    $('#pinktheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-pink.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-pink.png');
                    });
                    $('#purpletheme').click(function (e) {
                        e.preventDefault();
                        $('#theme').attr('href', 'assets/css/main-purple.css');
                        $('.navbar-brand img').attr('src', 'assets/img/logo-purple.png');
                    });
                });
            })(jQuery);
        </script>
    </body>

<!-- Mirrored from templates.styliothemes.com/corpboot/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 03:43:25 GMT -->
</html>

