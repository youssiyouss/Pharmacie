@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
        <body>

            <div class="card">
              <div class="text-center"><img class="rounded-circle m-t-15 w-75px" src="{{ asset('storage/'.$phar->photo) }}" alt="Card image cap" style="width: 35rem;"></div>
            </div>
            <div class="card-body">
                <div class="text-center">
                         <h4 class="m-t-15 m-b-2 bg-primary">{{ $phar->name}} {{ $phar->Prenom}}</h4>
                         <p class="text-muted"> @if( $phar->isadmin==1) Admin @else Pharmacien @endif</p>
                                    <div class="row">
                                       <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">id:</span> <span class="pull-right">{{ $phar->id}}</span></div>
                                       <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Nom:</span> <span class="pull-right">{{ $phar->name}}</span></div>
                                       <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">Prénom:</span> <span class="pull-right">{{ $phar->Prenom}}</span></div>
                                       <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Numero de Telephone:</span> <span class="pull-right"> {{ $phar->tel}}</span></div>
                                       <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">Date de naissance:</span> <span class="pull-right">{{ $phar->date_nais}}</span></div>
                                       <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Email:</span> <span class="pull-right">{{ $phar->email}}</span></div>
                                       <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">Login:</span> <span class="pull-right">{{ $phar->login}}</span></div>
                                       <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Date d'inscription:</span> <span class="pull-right">{{ $phar->created_at}}</span></div>
                                       <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Date dérniere modification:</span> <span class="pull-right">{{ $phar->updated_at}}</span></div>
                                       <div class="col-12 p-t-10 p-b-10"><a href="{{ url('pharmaciens/'.$phar->id.'/edit')}}" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"> Modifier</i></a></div>
                                    </div>
                </div>
            </div>
          </div>


      </body>
    </div>
  </div>
</div>
@endsection
