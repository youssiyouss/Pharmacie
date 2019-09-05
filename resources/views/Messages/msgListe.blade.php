@extends('layouts.admin')

@section('content')



            <div class="container">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>Hello, <span>Welcome here</span></h4>
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
                                <div class="email-left-box"><a href="email-compose.html" class="btn btn-primary btn-block">Repondre</a>
                                    <div class="mail-list mt-4"><a href="#" class="list-group-item border-0 text-primary p-r-0"><i class="fa fa-inbox font-18 align-middle mr-2"></i> <b>Lus</b> <span class="badge badge-primary badge-sm float-right m-t-5">{{$reads->count()}}</span> </a>
                                        <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent</a>
                                        <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-trash font-18 align-middle mr-2"></i>Trash <span class="badge badge-danger badge-sm float-right m-t-5">{{$trash->count()}}</span></a>
                                    </div>



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
