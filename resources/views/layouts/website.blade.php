<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>新聞發佈</title>

       
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" rel="stylesheet">
        <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        
      
        {{-- import resources/css/app.css --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
    </head>
    
    <header class="bg-white shadow-sm">
        <div class="container d-none d-md-block" >
            <div class="header-row mx-3">
                <a href="{{ url('/') }}" >
                    <img src="{{ asset('image/logo.png') }}" alt="logo" class="header-logo" />
                </a>

                <a href="{{ url('/') }}" >
                    <img src="{{ asset('image/logo2.png') }}" alt="logo2" class="header-logo"/>
                </a>

                <div class="header-right float-end">
                    <div class="social-media">
                        <a href="{{ url('/') }}" >
                            <img src="{{ asset('image/header-right-topBar-mail.png') }}" alt="logo2" class="social-logo"/>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="header-nav d-none d-md-block">
          
        </div>

    </header>
      
      

    @yield('content')

    <footer class="fixed-bottom bg-light py-3">
        <div class="container">
          <p class="text-center m-0">Design by Yeung Tsz Wa</p>
        </div>
      </footer>
      
      
</html>
<script src="{{ asset('js/jquery.min.js') }}" defer></script>