<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('stylesheet')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Advanced Internet Programming -  Alpha (v 0.1)
                </div>

                <div class="links">
                    <a href="submitmovie">Recommend a movie</a>
                    <a href="movie_guest">Check current movie</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/fulunhe/laravel_team_project">Team GitHub（v0.1)</a>
                </div>
            </div>
        </div>





    </body>
</html>
