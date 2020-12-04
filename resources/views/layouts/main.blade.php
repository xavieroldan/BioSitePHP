<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->        
        <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset ('css/style.css') }}" rel="stylesheet" type="text/css">
         <!--Font-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">  
        <!--Icons-->
        <script type="text/javascript" src="{{ asset ('https://kit.fontawesome.com/569256c9fc.js') }}" crossorigin="anonymous"></script>  
    </head>

    <body>   
       <!--Background-->
       <div class="bg">
        @include('layouts.navbar_top')   
        @yield('xm_navbar')
            <div class="container-fluid ">  
                @yield('body')

                @include('layouts.navbar_bottom')         
                @yield('footer_navbar')
            </div>
        </div>
        <!--background image-->
        <!-- Js -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>  
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>  
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>   
        <!-- Js -->
    </body>
</html>
