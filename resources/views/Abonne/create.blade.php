@extends('App')
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center  text-center mt-3 ">
    <div class="row justify-content-center align-items-center rounded-3 " style=" background-color: rgb(220, 217, 213); width: 50%; height: 400px;">
        <div class=" col-md-3  log">
            <img src="{{asset('img/Logo.png')}}">
        </div>
        <div class=" input-group col-12 d-flex justify-content-center">
            <form action="" method="" class="fw-bold fs-6">
                <input value="" class="form-control border-bottom-1" placeholder="nom et prenom">
                <input value="" class="form-control border-bottom-1 mt-1" placeholder="Date de naissance">
                <input value="" class="form-control border-bottom-1 mt-1" placeholder="Date d'abonnement">
                <input value="" class="form-control border-bottom-1 mt-1" placeholder="Telephone">
                <input value="" class="form-control border-bottom-1 mt-1" placeholder="E-mail">


        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex justify-content-center ms-4"> <button class="btn btn-primary rounded-pill fw-bold" type="submit" name="valider">Ajouter</button> <a class="btn btn-danger rounded-pill fw-bold" href="liste.php">Annuler</a></div>
        </div>

        </form>



    </div>
</div>
@endsection
