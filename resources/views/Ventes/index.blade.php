@extends('layouts.admin')

@section('content')

 <div class="container">
   <div class="row">
     <div class="col-md-12">

       <h4>Les ventes :</h4>

       <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

         @if(Session::has('success'))
                   <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                      {{ Session::get('success') }}
                   </div>
        @endif
       <div class="pull-right">
         <a href="{{ url('vente/create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"> Ajouter </i></a>
       </div>
       <table class="table">
         <thead>

           <tr>
             <th>ID</th>
             <th>Lot</th>
             <th>Date</th>
             <th>Quatitée</th>
           </tr>
         </thead>
         <tbody>
           @foreach($vente as $v)

          <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->lot }}</td>
            <td>{{ $v->date }}</td>
            <td>{{ $v->qt }}</td>
            <td>
                <form action="{{ url('vente/'.$v->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cette vente?')">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{ url('vente/'.$v->id.'/detail') }}" class="btn btn-primary">Details</a>
                  <a href="{{ url('vente/'.$v->id.'/edit') }}" class="btn btn-info">Modifier</a>
                  <button type="submit" class="btn btn-danger">Supprimer</button>
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
