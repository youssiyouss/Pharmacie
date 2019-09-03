@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if(session()->has('success'))
         <div class="alert alert-success">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
               <h5> {{session()->get('success')}} </h5>
         </div>
      @endif

     <div class="col-lg-12 col-xl-12">
                             <div class="card">
                               <div class="card-header" align="center">
                               @foreach($achat as $a)  <a href="{{ url('achat/'.$a->fournisseur .'/listAchat')}}" class="pull-left"><i class="fa fa-chevron-circle-left" style="color :#b7e778;"></i></a> @endforeach
                               </div>
                                 <div class="card-body">
                                    <div class="text-center">
                                      <h4 class="m-t-15 m-b-2">{{ $a->nom}}</h4>

                                                       <div class="row">
                                                            <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">ID Achat:</span> <span class="pull-right">{{ $a->id }}</span></div>
                                                            <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Nom Medicament:</span> <span class="pull-right">{{ $a->medoc }}</span></div>
                                                            <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Prix:</span> <span class="pull-right">{{ $a->prix }} DA</span></div>
                                                            <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Quantité Achat:</span> <span class="pull-right"> {{ $a->qt_achat }} lots</span></div>
                                                            <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Date Achat:</span> <span class="pull-right">{{ $a->date }}</span></div>
                                                            <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Date de peremption Lot:</span> <span class="pull-right">{{ $a->date_per }}</span></div>
                                                       </div>
                                     </div>

                                  </div>
                              </div>
     </div>
    </div>
  </div>
</div>


@endsection
