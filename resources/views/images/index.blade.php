@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2 class="text-center text-primary">ALl Images</h2></div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert alert-success alert-dismissable fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong> {!! session('flash_message') !!}</strong>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-condensed">
                                <thead>
                                <tr class="text-center">
                                    <th>Sr. No</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Upload Date</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $image)
                                    <tr>
                                        <td>{{ $image->id }}</td>
                                        <td><img src="{{ $image->image == ''? url('img/no-image.png'):url('img/upload/'.$image->image) }}" alt="" class="img-stu center-block"></td>
                                        <td>{{ $image->name }}</td>
                                        <td>{{ $image->category }}</td>
                                        <td>{{ $image->type }}</td>
                                        <td>{{ date('h:m:s, d-m-Y', strtotime($image->created_at)) }}</td>
                                        <td>
                                            {{ Form::open(array('url' => '/images/'.$image->id.'/edit', 'method' => 'get')) }}
                                            <button><span class="fa fa-pencil-square-o fa-2x"></span></button>
                                            {{ Form::close() }}
                                        </td>
                                        <td>
                                            {{ Form::open(array('url' => '/images/'.$image->id, 'method' => 'get')) }}
                                            <button><span class="fa fa-eye fa-2x"></span></button>
                                            {{ Form::close() }}
                                        </td>
                                        <td>
                                            {{ Form::open(array('url' => '/images/'.$image->id, 'method' => 'DELETE')) }}
                                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete?')"><span class="fa fa-trash"></span></button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer text-center">{{ $images->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection