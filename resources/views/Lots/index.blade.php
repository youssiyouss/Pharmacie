@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4>Liste des Achats :</h4>
       <div class="pull-right">
         <a href="{{ url('achat/create') }}" class="btn btn-success">Nouveau Achat</a>
       </div>
       <table class="table">
         <head>
         
           <tr>
             <th>ID</th>
             <th>Médicament</th>
             <th>Quatitée au stock</th>
             
           </tr>
         </head>
        <body>
            @foreach($lot as $a)

          <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->medoc }}</td>
            <td>{{ $a->qt_stock }}</td>
            
            <td>
                <form action="{{ url('achat/'.$a->id) }}" method="post">
                  {{ csrf_field() }}
                  
                  <a href="{{ url('lot/'.$a->id) }}" class="btn btn-primary">Details</a>
                 

                </form>
           </td>
          </tr>
         @endforeach
        </body>
       </table>
     </div>
   </div>
 </div>

@endsection
