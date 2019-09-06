@extends('layouts.admin')

@section('content')

 <div class="container">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Contenu</span></h4>
                    </div>
                    
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box"><a href="{{url('email')}}" class="btn btn-primary btn-block">Nouveau message</a>
                                    <div class="mail-list mt-4">
                                        <a href="{{url('messages')}}" class="list-group-item border-0 p-r-0"><i class="fa fa-inbox font-18 align-middle mr-2"></i>Inbox <span class="badge badge-primary badge-sm float-right m-t-5">{{$reads->count()}}</span> </a>
                                        <a href="{{url('send')}}" class="list-group-item border-0 p-r-0"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent <span class="badge badge-info badge-sm float-right m-t-5">{{$send}}</span></a>  
                                        <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-trash font-18 align-middle mr-2"></i>Trash <span class="badge badge-danger badge-sm float-right m-t-5">{{$trash->count()}}</span></a>
                                    </div>
                                   
                                </div>
                                @foreach($content as $c)
                                <div class="email-right-box">
                                    <div class="toolbar" role="toolbar">
                                        <div class="btn-group m-b-20">
                                            <form action="{{ url('sendmsg/'.$c->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cette vente?')">
                                                    {{ csrf_field() }}
                                                   {{ method_field('DELETE') }}
                                            <button type="submit"  class="btn btn-light" title="supprimer"><i class="fa fa-trash" ></i>
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="read-content">
                                        <div class="media p-t-15">
                                            
                                            <div class="media-body">
                                                <h5 class="m-b-3"><b>to:  </b>{{ $c->to }}</h5>
                                                <p class="m-b-2"><b>Le:  </b>{{ $c->day_sended }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="media mb-4 mt-1">
                                            <div class="media-body"><span class="pull-right"><b>à:  </b>{{$c->time_sended}}</span>
                                                <div><span class="m-0 text-primary"><b>subject: </b></span>{{ $c->subject }}</div><br>
                                            </div>
                                        </div>
                                        
                                       <div class="form-group">
                                                <p class="textarea_editor form-control bg-light" rows="15" > {{$c->message}} </p>
                                            </div>
                                        

                                </div>

                                <hr>
                                 <div class="text-right"> <a href="{{ url('messages') }}" class="btn btn-danger">Retour</a></div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


@endsection