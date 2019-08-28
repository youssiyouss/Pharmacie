@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h2>Détails de Ventes:</h2>
       <br>
       <div>
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
        
          
          
         

        
        
        </div>
       
     </div>
   </div>
 </div>

@endsection
