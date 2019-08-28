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
                                              <a href="{{ url('fournisseurs/create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"> Ajouter </i></a>
                                            </div>
                                              <table class="table table-xs">
                                                  <thead>
                                                      <tr>
                                                          <th>Nom Etablissement </th>
                                                          <th>Adresse</th>
                                                          <th>Numero Telephone</th>
                                                          <th>email</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                     @foreach($frnsrs as $frnsrs)
                                                      <tr>
                                                          <td><span>{{ $frnsrs->nom}}</span>
                                                          </td>
                                                          <td><span>{{ $frnsrs->adresse}}</span>
                                                          </td>
                                                          <td>{{ $frnsrs->tel}}</td>
                                                          <td><span>{{ $frnsrs->email}}</span></td>
                                                          <td>
                                                              <form action="{{ url('fournisseurs/'.$frnsrs->id)}}" method="post">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                  <li class="icons">
                                                                    <a href="{{ url('fournisseurs/'.$frnsrs->id)}}" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
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
