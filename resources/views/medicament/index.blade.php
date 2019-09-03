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
                                  <div class="card-body">
                                      <div class="active-member">
                                          <div class="table-responsive">
                                            <div class="pull-right">
                                              <a href="{{ url('medicaments/create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"> Nouveau medicament </i></a>
                                            </div>
                                              <table class="table table-xs">
                                                  <thead>
                                                      <tr>
                                                        <th>nom</th>
                                                        <th>dosage (ml/mg)</th>
                                                        <th>forme</th>
                                                        <th>famille</th>
                                                        <th>prix DA</th>
                                                        <th>action</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                     @foreach($medicaments as $listeM)
                                                      <tr class="col-md-2">
                                                          <td><span>{{$listeM->nom}}</span>
                                                          </td>
                                                          <td><span>{{$listeM->dosage}}</span>
                                                          </td>
                                                          <td></td>
                                                          <td><span>{{$listeM->famille}}</span></td>
                                                          <td><span>{{$listeM->prix}}</span></td>
                                                          <td>
                                                              <form action="{{ url('medicaments/'.$listeM->id)}}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cet médicament?')">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                  <li class="icons">
                                                                    <a href="{{ url('medicaments/'.$listeM->id)}}" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
                                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o fa-fw"></i></button>
                                                                 </li>
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
 </div>


 @endsection
