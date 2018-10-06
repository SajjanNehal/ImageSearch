@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2 class="text-center text-primary">({{ $image->id }} ){{ $image->name }}</h2></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th><span class="fa fa-photo"></span> Photo</th>
                                    <td><img src="{{ $image->image == ''? url('img/no-image.png'):url('img/upload/'.$image->image) }}" alt="" class="img-stu"></td>
                                </tr>
                                <tr>
                                    <th><span class="fa fa-id-badge"></span> Sr. No</th>
                                    <td>{{ $image->id }}</td>
                                </tr>
                                <tr>
                                    <th><span class="fa fa-id-card"></span> Name</th>
                                    <td>{{ $image->name }}</td>
                                </tr>
                                <tr>
                                    <th><span class="fa fa-street-view"></span> Category</th>
                                    <td>{{ $image->category }}</td>
                                </tr>
                                <tr>
                                    <th><span class="fa fa-location-arrow"></span> Type</th>
                                    <td>{{ $image->type }}</td>
                                </tr>
                                <tr>
                                    <th><span class="fa fa-calendar-plus-o"></span> Upload Date</th>
                                    <td>{{ date('h:m:s, d-m-Y', strtotime($image->created_at)) }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ URL::to( 'images/' . $previous ) }}"><span class="fa fa-arrow-left"></span> Previous</a> <br>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ URL::to( 'images/' . $next ) }}"><span class="fa fa-arrow-right"></span> Next</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <a href="{{ URL::to( '/images/'.$image->id.'/edit' ) }}"><span class="fa fa-pencil-square-o"></span> Edit</a>
                                        {{ Form::open(array('url' => '/images/'.$image->id, 'method' => 'DELETE')) }}
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete?')"><span class="fa fa-trash"></span></button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection