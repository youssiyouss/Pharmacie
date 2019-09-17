@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <body>

        <div class="card">
					<div class="text-center"><img class="rounded-circle m-t-15 w-75px" src="{{ asset('storage/'.$medicament->photo) }}" alt="Card image cap" style="width: 35rem;"></div>
          <div class="text-center bg-primary" >fiche detaillé sur le medicament: </div>

        </div>
        <div class="card-body">
            <div class="text-center">
                     <h4 class="m-t-15 m-b-2">{{$medicament->nom}}<p class="text-muted">Medicament {{$medicament->famille}}</p></h4>
                              <div class="row">
																	<div class="col-12 border-bottom-1 p-t-10 p-b-10">{{$medicament->resume}}</div>
																	<div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">prix:</span> <span class="pull-right"> {{$medicament->prix}}<strong>DA</strong></span></div>
																	<div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">mode d'administration :</span> <span class="pull-right">{{$medicament->mode}}</span></div>
                                  <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">composition :</span> <span class="pull-right"> {{$medicament->composition}}</span></div>
                                  <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600"><a href="{{$medicament->plus}}"><i class="fa fa-plus"  style="color :#b7e778;" aria-hidden="true"> En savoir plus </i></a></span></div>
                                  <div class="col-12 p-t-10 p-b-10"><a href="{{ url('medicaments/'.$medicament->id.'/edit')}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"> Modifier</i></a></div>

                                </div>
            </div>
        </div>
        </body>
      </div>
  </div>
</div>

                    <p><strong></strong></p>

         </div>
	</div>
</div>

@endsection
