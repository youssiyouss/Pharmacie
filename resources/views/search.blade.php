@extends('layouts.admin')

@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-12">
      <div class="col-lg-12 col-xl-12">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="active-member">
                                          <div class="table-responsive">
                                              <table class="table table-xs">
  @if(count($users) > 0)
    @if (isset($users))
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
                                                  @foreach($users as $phar)
                                                   <tr>
                                                       <td>
                                                           <img src="{{ asset('storage/'.$phar->photo) }}" class="pull-left m-r-10 avatar-img w-40px rounded-circle" alt="">{{ $phar->name}}_{{ $phar->Prenom}}</td>
                                                       <td><span>{{ $phar->date_nais}}</span>
                                                       </td>
                                                       <td>{{ $phar->tel}}</td>
                                                       <td><span>{{ $phar->email}}</span></td>
                                                       <td><i class="text-success f-s-12 m-r-10"></i>@if($phar->isadmin==true) Admin @else Pharmacien
                                                           @endif</td>
                                                       <td>
                                                           <form action="{{ url('pharmaciens/'.$phar->id)}}" method="post">
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
    @endif                                       </tbody>
  @endif
  @if(count($fournisseurs) > 0)
    @if (isset($fournisseurs))
                                                    <thead>
                                                        <tr>
                                                            <th>Nom Etablissement </th>
                                                            <th>Adresse</th>
                                                            <th>Numero Telephone</th>
                                                            <th>email</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       @foreach($fournisseurs as $frnsrs)
                                                        <tr class="col-md-2">
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

          @endif
      @endif
      @if(count($medicaments) > 0)
        @if (isset($medicaments))
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
                                                                <form action="{{ url('medicaments/'.$listeM->id)}}" method="post">
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

        @endif
      @endif
      @if(count($lots) > 0)
        @if (isset($lots))
                                                    <thead>

                                                      <tr>
                                                        <th>ID</th>
                                                        <th>Médicament</th>
                                                        <th>Quatitée au stock</th>

                                                      </tr>
                                                    </thead>
                                                   <tbody>
                                                       @foreach($lots as $a)

                                                     <tr class="col-md-2">
                                                       <td><span>{{ $a->id }}</span></td>
                                                       <td><span>{{ $a->medoc }}</span></td>
                                                       <td><span>{{ $a->qt_stock }}</span></td>

                                                       <td>
                                                           <form action="{{ url('achat/'.$a->id) }}" method="post">
                                                             {{ csrf_field() }}
                                                             <li class="icons">
                                                             <a href="{{ url('lot/'.$a->id) }}" class="btn btn-default"><i class="fa fa-pencil-square-o"></i></a>
                                                             </li>

                                                           </form>
                                                      </td>
                                                     </tr>
                                                    @endforeach
                                                  </tbody>

        @endif
      @endif

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
