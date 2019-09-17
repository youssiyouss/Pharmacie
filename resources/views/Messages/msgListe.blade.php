@extends('layouts.admin')

@section('content')



            <div class="container">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Boite Email Reçus:</span></h4>
                    </div>

                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                 @if(Session::has('delete'))
                                   <div class="alert alert-danger">
                                 {{ Session::get('delete') }}
                                    </div>
                                    @endif

                                     @if(Session::has('success'))
                                   <div class="alert alert-success">
                                 {{ Session::get('success') }}
                                    </div>
                                    @endif

                             <div class="email-left-box"><a href="{{ url('email')}}" class="btn btn-primary btn-block">nouveau message</a>
                                    <div class="mail-list mt-4">
                                        <a href="{{url('messages')}}" class="list-group-item border-0 text-primary p-r-0"><i class="fa fa-inbox font-18 align-middle mr-2"></i> <b>Boite de réception</b> <span class="badge badge-primary badge-sm float-right m-t-5">{{$reads->count()}}</span> </a>

                                        <a href="{{url('send')}}" class="list-group-item border-0 p-r-0"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Messages envoyés <span class="badge badge-info badge-sm float-right m-t-5">{{$send}}</span></a>
                                        <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-trash font-18 align-middle mr-2"></i>Trash <span class="badge badge-danger badge-sm float-right m-t-5">{{$trash->count()}}</span></a>
                                    </div>

                                    <h5 class="mt-5 m-b-10">Chat</h5>
                                    @foreach($customer as $c)
                                    <div class="chat-wrap">
                                        <div class="media p-t-15">
                                            <!--img src="../../assets/images/avatar/1.jpg" class="mr-3 rounded-circle w-35px" alt=""-->
                                            <div class="media-body"><span class="fa fa-circle f-s-12 text-success pull-right p-t-10"></span>
                                                <h6 class="m-b-0">{{$c->nom}}  {{$c->prenom}}</h6>
                                                <p class="f-s-14 m-b-0">{{$c->email}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                                <div class="email-right-box">
                                    <div role="toolbar" class="toolbar">
                                        <h3>Messages </h3>

                                    </div>
                                     <div class="email-list m-t-15 ">
                                    @foreach($msg as $m)

                                    @if($m->read_at ==NULL)


                                    	<div class="message">
                                            <a href="{{ url('messages/'.$m->id)}}">
                                                <div class="col-mail col-mail-1">
                                                    <div class="email-checkbox">

                                                    </div><span class="star-toggle ti-star"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <div class="subject"> {{ $m->message }} </div>
                                                    <div class="date">{{ $m->created_at }}</div>
                                                </div>
                                            </a>
                                        </div>

                                    @endif

                                     @if($m->read_at !=NULL)


                                    	<div  class="bg-light">
                                    	<div class="message">
                                            <a href="{{ url('messages/'.$m->id)}}">
                                                <div class="col-mail col-mail-1">
                                                    <div class="email-checkbox">

                                                    </div><span class="star-toggle ti-star"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <div class="subject"> {{ $m->message }} </div>
                                                    <div class="date">{{ $m->created_at }}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endif





                                        @endforeach

                                    </div>
                                    <br>
                                    <br>

                                    <!-- panel -->
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-left">1 - {{$msg->count()}} </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="btn-group float-right">
                                                {{ $msg->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->




@endsection
