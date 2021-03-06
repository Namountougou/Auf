@extends('App')
@section('content')
@if(session()->has('success'))
<div class=" bg-success fs-4 fw-bold text-center col-md-6 offset-md-3" id="success" style="height: 40px">
    {{ session()->get('success') }}
</div>
@endif


<div class="row table">
    <div class="col-md-12 border-2 border-danger rounded-2 overflow-scroll " style="height: 470px">
        <table class="table table-striped-row border-2 border-danger rounded-2" id="myTable">
            <thead>
                <tr class=" bg-primary text-light text-center fw-bold fs-6 " style="height: 30px; position:sticky; top: 0;">
                    <th class="compt">No</th>
                    <th class="">Nom</th>
                    <th class="">Date de naissance</th>
                    <th class="">Date d'abonnement</th>
                    <th class="">Telephone</th>
                    <th class="">E-mail</th>
                    <th class="compt">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($abonnes as $abonne)

                <tr class="text-center">
                    <td style="width: 75px;">{{$i}}</td>
                    <td>{{$abonne->nom}}</td>
                    <td>{{$abonne->date_n}}</td>
                    <td>{{$abonne->date_db}}</td>
                    <td>{{$abonne->telephone}}</td>
                    <td>{{$abonne->email}}</td>
                    <td style="width: 75px;">
                        <div class="d-flex justify-content-around">
                            <a href="{{route('Abonne.edit',$abonne->id)}}" class="border-2 text-decoration-none text-dark"><i class="fa fa-pen fw-bold "></i></a>
                            <form action="{{route('Abonne.destroy',$abonne->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class='fas fa-trash fw-bold'></i></button>
                            </form>
                        </div>
    </div>

    </tr>
    @php $i++ @endphp
    @endforeach


    </tbody>

    </table>

</div>

<div class="d-flex justify-content-center">
    <div class="d-flex justify-content-around col-md-4 offset-md-4 ms-4">
        <a class="btn btn-danger rounded-3 fw-bold text-decoration-none" href="{{route('home')}}">Fermer</a>
        <a class="btn btn-primary rounded-3 fw-bold text-decoration-none" href="{{route('Abonne.create')}}">Ajouter</a>
        <a class="btn btn-success rounded-3 fw-bold text-decoration-none" href="{{route('Abonne.index')}}">Lister</a>
    </div>
</div>
@endsection