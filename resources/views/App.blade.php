<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <title>abonnee</title>
</head>

<body>

    <div class="row d-flex col-md-12">

        <div class="col-md-4 offset-md-1 logo">
            <img src="{{asset('img/auf.jpg')}}">
        </div>
        <div class=" col-md-6 offset-md-1  d-flex align-items-center">
            <span class="fw-bold fs-1" style="color: rgb(75, 2, 143)">Gestion des Administrateurs</span>
        </div>

    </div>





    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>