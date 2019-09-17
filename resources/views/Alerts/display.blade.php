@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">

       <h2>Détail Alerte :</h2>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
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
</table><br><hr>
         <div class="col-md-12">
          <div class="row">
            <div class="col-md-6 text-right"><a href="{{url('alerte')}}" class="btn btn-danger">Retour</a></div>
            <div class="col-md-6 text-right"><span><b>Date Alerte: </b></span><small> {{$date}}</small></div>
         </div>
         </div>
  
        </div>

        </div>
       
     </div>
   </div>
 </div>
       
     </div>
   </div>
 </div>

@endsection
