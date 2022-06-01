@extends('App')
@section('content')
@if ($errors->any())
<div class=" bg-danger fs-4 fw-bold text center col-md-6 offset-md-3" style="height: 40px">

    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach

</div>
@endif

<div class="container-fluid d-flex justify-content-center align-items-center  text-center mt-3 ">
    <div class="row justify-content-center align-items-center rounded-3 " style=" background-color: rgb(220, 217, 213); width: 50%; height: 400px;">
        <div class=" col-md-3  log">
            <img src="{{asset('img/Logo.png')}}">
        </div>
        <div class=" input-group col-12 d-flex justify-content-center">

            <form action="{{route('Abonne.store')}}" method="POST" class="fw-bold fs-6">
                @csrf
                @method('POST')
                <input type="text" class="form-control border-bottom-1" name="nom" placeholder="nom et prenom">
                <input type="date" class="form-control border-bottom-1 mt-1" name="date_n" placeholder="Date de naissance">
                <input type="date" class="form-control border-bottom-1 mt-1" name="date_db" placeholder="Date d'abonnement">
                <input type="text" class="form-control border-bottom-1 mt-1" name="telephone" placeholder="Telephone">
                <input type="email" class="form-control border-bottom-1 mt-1" name="email" placeholder="E-mail">
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex justify-content-around ms-4"> <button class="btn btn-primary rounded-pill fw-bold" type="submit" name="valider">Ajouter</button>
                <a class="btn btn-danger rounded-pill fw-bold" href="{{route('home')}}">Annuler</a>
                <a class="btn btn-success rounded-pill fw-bold" href="{{route('Abonne.index')}}">Lister</a>
            </div>
        </div>

        </form>



    </div>
</div>
@endsection