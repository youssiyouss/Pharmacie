@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4>Liste des Lots :</h4>

       <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

       <div class="pull-right">
         <a href="{{ url('achat/create') }}" class="btn btn-success">Nouveau Achat</a>
       </div>
       <table class="table">
         <head>
         
           <tr>
             <th>ID</th>
             <th>Médicament</th>
             <th>Quatitée au stock</th>
             <th>Actions</th>
             
           </tr>
         </head>
        <body>
            @foreach($lot as $a)

          <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->medoc }}</td>
            <td>{{ $a->qt_stock }}</td>
            
            <td class="text-left">
                <form action="{{ url('achat/'.$a->id) }}" method="post">
                  {{ csrf_field() }}
                  
                  <a href="{{ url('lot/'.$a->id) }}" class="btn btn-primary" title="detail"><i class="fa fa-align-justify"></i></a>
                 

                </form>
           </td>
          </tr>
         @endforeach
        </body>
       </table>

     </div>
   </div>
 </div>
</div>
     </div>
   </div>
 </div>

@endsection
