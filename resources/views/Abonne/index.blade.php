@extends('App')
@section('content')
@if(session()->has('success'))
<div class="alert alert-success fs-3 fw-bold text-center col-md-6 offset-md-3" id="success">
    {{ session()->get('success') }}
</div>
@endif


<div class="row table">
    <div class="col-md-12 border-2 border-danger rounded-2 overflow-scroll " style="height: 475px">
        <table class="table table-striped-row border-2 border-danger rounded-2">
            <tr class=" bg-primary text-light text-center fw-bold fs-6 " style="height: 30px; position:sticky; top:0;">
                <th class="compt">No</th>
                <th class="">Nom</th>
                <th class="">Date de naissance</th>
                <th class="">Date d'abonnement</th>
                <th class="">Numero de telephone</th>
                <th class="">E-mail</th>
                <th class="compt">Action</th>
            </tr>
            @php ($i=1);
            @foreach($abonnes as $abonne)

            <tr class="text-center">
                <td>{{$i}}</td>
                <td>{{$abonne->nom}}</td>
                <td>{{$abonne->date_n}}</td>
                <td>{{$abonne->date_db}}</td>
                <td>{{$abonne->telephone}}</td>
                <td>{{$abonne->email}}</td>
                <td>
                    <a href="{{route('Abonne.edit',$abonne->id)}}" class="btn btn-primary rounded-pill fw-bold"><i class='fa-solid fa-pen bg-primary'></i></a>
                    <a href="{{route('Abonne.destroy',$abonne->id)}}" class="btn btn-danger rounded-pill fw-bold"><i class='fa-solid fa-trash bg-danger'></i></a>
                </td>
            </tr>
            {{ $i++}}
            @endforeach


        </table>
        <script>
            
        </script>
    </div>

</div>
@endsection