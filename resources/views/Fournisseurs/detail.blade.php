@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <body>

        <div class="card">
          <div class="text-center">Fournisseur Numero : {{ $frnsrs->id}}</div>

        </div>
        <div class="card-body">
            <div class="text-center">
                     <h4 class="m-t-15 m-b-2">{{ $frnsrs->nom}}</h4>
                              <div class="row">
                                   <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">id:</span> <span class="pull-right">{{ $frnsrs->id}}</span></div>
                                   <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Nom:</span> <span class="pull-right">{{ $frnsrs->nom}}</span></div>
                                   <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Numero de Telephone:</span> <span class="pull-right"> {{ $frnsrs->tel}}</span></div>
                                   <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Email:</span> <span class="pull-right">{{ $frnsrs->email}}</span></div>
                                   <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Date d'ajout:</span> <span class="pull-right">{{ $frnsrs->created_at}}</span></div>
                                   <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Date dérniere modification:</span> <span class="pull-right">{{ $frnsrs->updated_at}}</span></div>
                                   <!-- <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Nombre d'achat:</span> <span class="pull-right">{{ $frnsrs->fournisseur}}</span></div>
                                   <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Date:</span> <span class="pull-right">{{ $frnsrs->date}}</span></div>
                                   <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Quantité d'achats:</span> <span class="pull-right">{{ $frnsrs->qt_achat}}</span></div> -->

                                   <div class="col-12 border-bottom-1 p-t-10 p-b-10"><a href="{{ url('achat/'.$frnsrs->id.'/detail')}}" class="pull-left f-w-600"><span class="pull-left f-w-600 fa fa-list-ul"> Afficher list achats:</span></a></div>
                                   <div class="col-12 p-t-10 p-b-10"><a href="{{ url('fournisseurs/'.$frnsrs->id.'/edit')}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"> Modifier</i></a></div>

                                </div>
            </div>
        </div>
        </body>
      </div>
  </div>
</div>
@endsection
