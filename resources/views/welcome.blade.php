<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

            <div class="container">
                <div class="">
                    
                    <h3>Mohkemliye hesabat dusturlari</h3>
                    <ol>
                        <li><a href="/calculate/formula1">Gövdənin hesabı qalığı </a></li>
                        <li><a href="/calculate/formula2">Elleptik dibin hesabı qalığı</a></li>
                    </ol>
                    <hr>

                    <h3>Tutumda tetbiq olunacaq qoruyucu klapanlarin buraxma en kesiklerinin sahesinin ve onlarin sayinin teyini dusturlari </h3>
                    <ol>
                        <li><a href="/calculate/formula5">Tutumun xarici sethinin sahesi:</a></li>
                        <li><a href="/calculate/formula6">Tutumun silindirik sethinin sahesi:</a></li>
                        <li><a href="/calculate/formula7">Sildirin hissenin xarici diametri</a></li>
                        <li><a href="/calculate/formula8">Tutumun elliptik dibinin xarici sethinin sahesi</a></li>
                    </ol>

                    <h3>Tutumun hendesi hecminin teyini</h3>
                    <ol>
                        <li><a href="/calculate/formula10">Tutumun govdesinin hecmi</a></li>
                        <li><a href="/calculate/formula11">Tutumun dibinin hecmi</a></li>
                        <li><a href="/calculate/formula12">Tutumun hecmi</a></li>
                        <li><a href="/calculate/formula13">Tutumun faydali hecmi</a></li>
                    </ol>
                    {{-- <a class="btn btn-primary btn-lg" href="/calculate" role="button">Calculator</a> --}}
                </div>
            </div>
        </div>
    </body>
</html>
