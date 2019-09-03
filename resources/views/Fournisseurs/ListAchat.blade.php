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
                                <div class="card-header" align="center">List d'achat:
                                @foreach($achat as $a)  <a href="{{ url('fournisseurs/'.$a->fournisseur)}}" class="pull-left"><i class="fa fa-chevron-circle-left" style="color :#b7e778;"></i></a> @endforeach
                                </div>
                                  <div class="card-body">
                                      <div class="active-member">
                                          <div class="table-responsive">
                                              <table class="table table-xs">
                                                  <thead>
                                                      <tr>
                                                          <th>ID</th>
                                                          <th>Date</th>
                                                          <th>Num fournisseur</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                     @foreach($achat as $a)
                                                      <tr class="col-md-2">
                                                          <td><span>{{ $a->id }}</span>
                                                          </td>
                                                          <td><span>{{ $a->date }}</span>
                                                          </td>
                                                          <td><span>{{ $a->fournisseur }}</span></td>
                                                          <td>
                                                            <a href="{{ url('achat/'.$a->id.'/listDetail') }}" class="btn btn-default"><i class="fa fa-list-ul"><b style="color :#b7e778;"> Détail </b></i></a>
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
