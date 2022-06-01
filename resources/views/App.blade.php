<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('js/datatables.min.js')}}"></script>




    <title>abonnee</title>
</head>

<body>

    <div class="row d-flex col-md-12">

        <div class="col-md-3 offset-md-1 logo">
            <img src="{{asset('img/auf.jpg')}}">
        </div>
        <div class=" col-md-5 offset-md-1  d-flex align-items-center">
            <span class="fw-bold fs-1" style="color: rgb(75, 2, 143)">Gestion des Abonnés</span>
        </div>
        <div class="col-md-2 d-flex align-items-center">
            @guest
            @if (Route::has('login'))

            <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>

            @endif

            @if (Route::has('register'))

            <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>

            @endif
            @else



            <a class="btn btn-danger"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        @endguest



    </div>

    </div>





    @yield('content')
    <!-- <script src="{{asset('js/app.js')}}"></script> -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('js/index.js')}}" defer></script>


</body>

</html>