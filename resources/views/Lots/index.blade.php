@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4>Liste des Achats :</h4>

       <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

       <div class="pull-right">
         <a href="{{ url('achat/create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"> Ajouter </i></a>
       </div>
       <table class="table">
         <thead>

           <tr>
             <th>ID</th>
             <th>Médicament</th>
             <th>Quatitée au stock</th>

           </tr>
         </thead>
        <tbody>
            @foreach($lot as $a)

          <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->medoc }}</td>
            <td>{{ $a->qt_stock }}</td>

            <td>
                <form action="{{ url('achat/'.$a->id) }}" method="post">
                  {{ csrf_field() }}

                  <a href="{{ url('lot/'.$a->id) }}" class="btn btn-success">Details</a>


                </form>
           </td>
          </tr>
         @endforeach
       </tbody>
       </table>

     </div>
   </div>
 </div>
</div>
     </div>
   </div>
 </div>

@endsection
