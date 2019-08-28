@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h2>Détails :</h2>
       <br>
       <div>
       <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Medicament</th>
      <th scope="col">Quantité du stock</th>
    </tr>
  </thead>
   
  <tbody>
    @foreach($medi as $i)
    <tr>
      
      <td>{{ $i->id }}</td>
      <td>{{ $i->medoc }}</td>
      <td>{{ $i->qt_stock }}</td>
    </tr>
     @endforeach
  </tbody>
</table>
        
          
          
         

        
        
        </div>
       
     </div>
   </div>
 </div>

@endsection
