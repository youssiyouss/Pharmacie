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

                                              @can('create',Auth::user())
                                                <a href="{{ url('pharmaciens/create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"> Ajouter </i></a>
                                              @endcan

                                     </div>
                                        <table class="table table-xs">
                                            <thead>
                                                <tr>
                                                    <th>Pharmaciens </th>
                                                    <th>Date de naissance</th>
                                                    <th>Numero Telephone</th>
                                                    <th>email</th>
                                                    <th>Statu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @foreach($phar as $phar)
                                                <tr>
                                                    <td><span><img src="{{ asset('storage/'.$phar->photo) }}" class="pull-left m-r-10 avatar-img w-40px rounded-circle" alt="">{{ $phar->name}}_{{ $phar->Prenom}}</span>
                                                    </td>
                                                    <td><span>{{ $phar->date_nais}}</span>
                                                    </td>
                                                    <td>{{ $phar->tel}}</td>
                                                    <td><span>{{ $phar->email}}</span></td>
                                                    <td><i class="text-success f-s-12 m-r-10"></i>@if($phar->isadmin==true) Admin @else Pharmacien
                                                        @endif</td>
                                                    <td>
                                                        <form action="{{ url('pharmaciens/'.$phar->id)}}" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer cet utilisateur?')">
                                                          {{ csrf_field() }}
                                                          {{ method_field('DELETE') }}
                                                            <li class="icons">
                                                              <a href="{{ url('pharmaciens/'.$phar->id)}}" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>

                                                              @can('delete',$phar)
                                                              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o fa-fw"></i></button>
                                                              @endcan
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
