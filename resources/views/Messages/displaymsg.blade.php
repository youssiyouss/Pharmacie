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
                                <div class="email-left-box"><a href="email-compose.html" class="btn btn-primary btn-block">Repodnre</a>
                                    <!--div class="mail-list mt-4"><a href="email-inbox.html" class="list-group-item border-0 text-primary p-r-0"><i class="fa fa-inbox font-18 align-middle mr-2"></i> <b>Inbox</b> <span class="badge badge-primary badge-sm float-right m-t-5">198</span> </a>
                                        <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent</a>  <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-star-o font-18 align-middle mr-2"></i>Important <span class="badge badge-danger badge-sm float-right m-t-5">47</span> </a>
                                        <a href="#" class="list-group-item border-0 p-r-0"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft</a><a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-trash font-18 align-middle mr-2"></i>Trash</a>
                                    </div-->

                                </div>
                                @foreach($content as $c)
                                <div class="email-right-box">
                                    <div class="toolbar" role="toolbar">
                                        <div class="btn-group m-b-20">
                                            <form action="{{ url('message/'.$c->id) }}" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cette vente?')">
                                                    {{ csrf_field() }}
                                                   {{ method_field('DELETE') }}
                                            <button type="submit"  class="btn btn-light"><i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="read-content">
                                        <div class="media p-t-15">

                                            <div class="media-body">
                                                <h5 class="m-b-3">{{ $c->nom }}  {{ $c->prenom }}</h5>
                                                <p class="m-b-2">{{ $c->created_at }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="media mb-4 mt-1">
                                            <div class="media-body"><span class="pull-right">07:23 AM</span>
                                                <small class="text-muted">DE: {{ $c->email }}</small>
                                            </div>
                                        </div>
                                        <h4 class="m-0 text-primary">Message:</h4><br>
                                        <p>{{ $c->message }}</p>


                                </div>

                                <hr>
                                 <div class="text-right"> <a href="{{ url('messages') }}" class="btn btn-danger">Retour</a></div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


@endsection
