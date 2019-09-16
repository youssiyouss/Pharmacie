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

       @if(Session::has('success'))
                   <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                      {{ Session::get('success') }}
                   </div>
        @endif

        @if(Session::has('danger'))
                   <div class="alert alert-danger">
                     {{ Session::get('danger') }}
                   </div>
        @endif

       <div class="pull-right">
         @can('create',Auth::user())
         <a href="{{ url('achat/create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"> Ajouter </i></a>
         @endcan
       </div>
       <table class="table">
         <thead>

             <th>ID</th>
             <th>Date création</th>
             <th>Num fournisseur</th>

         </thead>
        <tbody>
            @foreach($achat as $a)

          <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->date }}</td>
            <td>{{ $a->fournisseur }}</td>

            <td>
                <form action="{{ url('achat/'.$a->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cet achat?')">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{ url('achat/'.$a->id.'/detail') }}" class="btn btn-primary" title="Details"><i class="fa fa-align-justify"></i></a>
                  <a href="{{ url('achat/'.$a->id.'/edit') }}" class="btn btn-info" title="Modifier"><i class="fa fa-pencil-square-o"></i></a>
                  <button type="submit" class="btn btn-danger" title="supprimer"><i class="fa fa-trash-o fa-fw"></i></button>


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
