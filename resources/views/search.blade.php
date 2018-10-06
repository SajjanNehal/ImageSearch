@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2 class="text-center text-primary">Result</h2></div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('flash_message'))
                            <div class="alert alert alert-success alert-dismissable fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong> {!! session('flash_message') !!}</strong>
                            </div>
                        @endif
                            <h3> The Search results for your query <b>' {{ session('query')  }} '</b> are :</h3>
                            @if(count($results) > 1)
                            @foreach($results as $result)
                                <div class="col-sm-6">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#" data-toggle="modal" data-target="#{{ $result->id }}">
                                            <img src="{{ url('img/upload/'.$result->image) }}" alt="" class="img-stu">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Name: {{ $result->name }}</h4>
                                        <h4>Category: {{ $result->category }}</h4>
                                        <h4>Type: {{ $result->type }}</h4>
                                        <p>View: <a href="#" data-toggle="modal" data-target="#{{ $result->id }}"><span class="fa fa-eye fa-2x"></span></a></p>
                                        <p>Download: <a href="{{ url('img/upload/'.$result->image) }}" download><span class="fa fa-download fa-2x"></span></a></p>

                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $result->id }}" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">{{ $result->name }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ $result->image == ''? url('img/no-image.png'):url('img/upload/'.$result->image) }}" alt="" class="img-responsive center-block">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                     </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                             <h1 class="text-center">Sorry ! not found</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection