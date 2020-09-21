<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Onde estou?</title>

        <link rel="icon" href="/img/icone.png">

        <meta name="theme-color" content="#53b96a">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name=”keywords” content="onde estou, onde, estou, perfil, page" />
        <meta property="og:url" content="{{env('APP_URL')}}{{$user->url_name}}" />
        <meta property="type" content="website" />
        <meta property="og:title" content="{{$user->name}}">
        <meta property="og:description" content="{{$user->bio}}">
        <meta property="og:image" content="{{env('APP_URL')}}{{$image}}">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="640">
        <meta property="og:image:height" content="480">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link href="/template/css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="/anijis/anicollection.css">

        <style>
            .bio {
                margin: 10px 0;
                white-space: pre-wrap;
            }
            .profile-info {
                align-items: center;
                box-sizing: border-box;
                display: flex;
                margin-top: 1.25rem;
                flex-direction: column;
                flex-grow: 1;
                flex-basis: 1%;
                width: 100%;
            }
            .display-name {
                justify-content: center;
                text-align: center;
                width: 100%;
                font-size: 2rem;
                word-break: break-word;
            }
            .location {
                align-items: center;
                border: 1px solid #34312f;
                border-radius: 1.5625rem;
                color: #34312f;
                display: flex;
                font-size: .7rem;
                margin: .3125rem 0;
                margin-top: .8rem 0;
                padding: .5rem .9375rem .5rem .625rem;
                width: -webkit-max-content;
                width: -moz-max-content;
                width: max-content;
                cursor: pointer;
            }

            .icon-style {
                font-size: 35px;
            }

      /* Set the size of the div element that contains the map */
            #map {
                height: 400px;  /* The height is 400 pixels */
                width: 100%;  /* The width is the width of the web page */
            }

            /* If the screen size is 600px or less, set the font-size of <div> to 30px */
            @media only screen and (min-width: 575px) {
                .base-cima{
                    margin-bottom: 15px;
                }
                .profile-info{
                    align-items:flex-start !important;
                }
                .display-name{
                    text-align: left !important;
                }
                .location{
                    align-items: center;
                }
            }

        </style>
        

    </head>
    <body style="background-color:#f1f1f1 !important; font-family: Raleway,sans-serif;">

        <center id="load-box">
            <i style="font-size: 50px; margin-top: 80px" class="fas fa-spinner fa-pulse"></i>
        </center>
        <div class="container mt-3 dom" style="padding: 0px 25px 0px 25px; max-width: 600px; display: none">

            <div class="row base-cima">
                <div class="col-sm-5 col-md-4 text-center">
                    <img data-anijs="if: load, on: window, do: zoomInUp animated, after: loadLinks" src="{{$image}}" style="max-width: 150px" class="img img-fluid rounded-circle img-thumbnail rounded " alt="User"> 
                </div>
                <div class="col-sm-7 col-md-8" style="margin-top: -15px;">

                    <div class="profile-info">
                        <div class="display-name" data-anijs="if: load, on: window, do: bounceInLeft animated, after: loadLinks">
                            <span>{{$user->name}}&nbsp;</span>
                        </div>
                        @if($user->city != "")
                            <a @if($link != "#")target="_blank"@endif href="{{$link}}" style="text-decoration: none;" data-anijs="if: load, on: window, do: bounceInRight animated, after: loadLinks">
                                <div class="location">
                                    <i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp;{{$user->city}} @if($user->state != ""), {{$user->state}} @endif
                                </div>
                            </a>
                        @endif
                        <p data-anijs="if: load, on: window, do: bounceInUp animated, after: loadLinks" class="bio">{{$user->bio}}</p>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <input type="hidden" id="url_name" value="{{$user->url_name}}">
        
                    <div id="lista-links" data-anijs="if: load, on: window, do: fadeInUp animated, after: loadLinks"></div>

                </div>
            </div>
                    
        </div>   

        <!-- <div id="map"></div> -->

        <footer class="bg-black small text-center text-white-50" style="padding: 10px">
            <div class="container">
                <div class="social d-flex justify-content-center">

                    <a class="navbar-brand" href="/"><img id="animate" src="/img/logo.png" alt="" style="width: 100px; opacity: 0.8">Faça o seu</a>
                    
                </div>
            </div>
        </footer>

        <script src="/js/jquery-3.5.1.min.js" ></script>
        <script src="/js/bootstrap.bundle.min.js" ></script>
        <script src="/js/sweetalert.js"></script>
        <script src="/js/includes.js"></script>
        <script src="/js/site/page.js" ></script>
        @yield('js')
        <script src="/anijis/anijs.js"></script>
        <script src="/anijis/anijs-helper-scrollreveal.js"></script>

        <!-- <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                var uluru = {lat: -20.237536, lng: -41.509946};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 4, center: uluru});
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map});
            }
        </script> -->

        <!-- <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp28jkbFRMlEdBXOzpGINUbZ27s7JjnH4&callback=initMap"></script> -->

    </body>

</html>


