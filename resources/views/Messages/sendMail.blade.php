@extends('layouts.admin')

@section('content')


 
            <div class="container">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Nouveau Message</h4>
                    </div>

                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box"><a href="{{ url('messages')}}" class="btn btn-primary btn-block">Messages</a>
                                    <div class="mail-list mt-4">
                                        <a href="{{ url('messages')}}" class="list-group-item border-0 p-r-0"><i class="fa fa-inbox font-18 align-middle mr-2"></i>Boite de réception<span class="badge badge-primary badge-sm float-right m-t-5">{{$reads->count()}}</span> </a>

                                        <a href="{{url('send')}}" class="list-group-item border-0 p-r-0"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Messages envoyés<span class="badge badge-info badge-sm float-right m-t-5">{{$send}}</span></a>
                                        <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-trash font-18 align-middle mr-2"></i>Trash<span class="badge badge-danger badge-sm float-right m-t-5">{{$trash->count()}}</span></a>
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
                                    <div class="toolbar" role="toolbar">
                                        <div class="btn-group m-b-20">
                                            <button type="button" class="btn btn-light"><i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                        
                                    </div>
                                    <div class="compose-content">
                                        <form action="{{url('send')}}" method="POST">
                                             {{ csrf_field() }}
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-transparent" name="to" placeholder=" To">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-transparent" name="sub" placeholder=" Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="textarea_editor form-control bg-light" name="message" rows="15" placeholder="Enter text ..."></textarea>
                                            </div>

                                             <div class="text-left m-t-15">
                                        <button class="btn btn-primary m-b-30 m-t-15 f-s-14 p-l-20 p-r-20 m-r-10" type="submit"><i class="fa fa-paper-plane m-r-5"></i> Send</button>
                                        <a href="{{url('messages')}}" class="btn btn-dark m-b-30 m-t-15 f-s-14 p-l-20 p-r-20" type="button"><i class="ti-close m-r-5 f-s-12"></i> Discard</a>
                                    </div>
                                        </form>
                                        <h5 class="m-b-20"><i class="fa fa-paperclip m-r-5 f-s-18"></i> Attatchment</h5>
                                        <!--form action="#" class="dropzone">
                                            <div class="form-group">
                                                <div class="fallback">
                                                    <input class="l-border-1" name="file" type="file" multiple="multiple">
                                                </div>
                                            </div>
                                        </form-->
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection