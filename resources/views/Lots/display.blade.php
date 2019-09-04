@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

      @if($vente->count() == 0)
        <h2>Ce produit n'a pas encore été vendus!</h2>
      @endif

        @if($vente->count() != 0)
       <h2>Détails de Ventes du Lot:</h2>
       <br>
        <div class="row">
        <div class="col-lg-12">
        <div class="card">
        <div class="card-body">

       <table class="table">
         <thead >
           <tr class="bg-primary">
             <th scope="col">ID</th>
             <th scope="col">Date de Vente</th>
             <th scope="col">Quantitée</th>
           </tr>
         </thead>

         <tbody>
           @foreach($vente as $v)
           <tr>

             <td>{{ $v->id }}</td>
             <td>{{ $v->date }}</td>
             <td>{{ $v->qt }}</td>

           </tr>
           @endforeach
         </tbody>
       </table>
       @endif
      <div><a href="{{ url('lot') }}" class="btn btn-success">Retour</a></div>



</div>
        </div>
        </div>
        </div>

     </div>
   </div>
 </div>

@endsection
