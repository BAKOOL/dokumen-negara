<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="/css/welcomesheet.css" rel="stylesheet">
        <script src="{{asset("js/app.js")}}"> </script>

        <title>ReadandWarite</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ReadandWArite
                </div>
                <div class="form-group">
                    <form action="/stationary/search" method="GET">
                        <input type="text" name="search" class="form-control form-control-lg" placeholder="Search for stationary" id="usr">
                        <button type="submit" class="btn btn-primary" value="Search">Search</button>
                    </form>

                </div>

                <div class="image">
                    <a href="{{route('searchnotebook')}}"><img src="images/type/notebook.png" alt="notebook" width="200" height="200"></a>
                    <a href="{{route('searchpen')}}"><img src="images/type/pen.png" alt="notebook" width="200" height="200"></a>
                    <a href="{{route('searchruler')}}"><img src="images/type/rol.png" alt="notebook" width="200" height="200"></a>
                    <a href="{{route('searchdict')}}"><img src="images/type/dict.png" alt="notebook" width="200" height="200"></a>
                </div>
            </div>
        </div>
    </body>
</html>
