@extends('App')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 bg-success fs-4 fw-bold text-center" id="success">



            @if (session('status'))
            <div class="alert alert-success fs-4 fw-bold text-center" role="alert">
                {{ session('status') }}
            </div>
            @endif

            {{ __('You are logged in!') }}

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center text-dark  mt-4">
        <h1 class="fs-1 fw-bold">QUE VOULEZ-VOUS FAIRE?</h1>
    </div>
</div>
<div class="container ">
    <div class="row" style="margin-top: 6rem ">
        <div class="col-md-12 d-flex justify-content-center align-items-center text-center">
            <a href="{{route('Abonne.create')}}" class="col-md-2 text-light text-decoration-none btn btn-primary fw-bold rounded-pill">Ajouter</a>

            <a href="{{route('Abonne.index')}}" class="col-md-2 ms-4 text-light text-decoration-none btn btn-success fw-bold rounded-pill">Lister</a>
        </div>
        <div class="col-md-12 text-center">
            <a href="" class="text-light text-decoration-none bg-danger btn btn-danger rounded-pill col-md-2 mt-4 fw-bold">Fermer</a>
        </div>
    </div>
</div>
@endsection