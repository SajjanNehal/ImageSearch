@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2 class="text-center text-primary">Upload Image</h2></div>
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
                            {{ Form::open(array('url' => '/images','enctype' => 'multipart/form-data', 'files' => true)) }}
                                {{ csrf_field() }}
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="image">Please select image:</label>
                                        {{ Form::file('image', null, array('class' => 'form-control')) }}
                                        <span class="help-block">image must be less than size: 2MB</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('name', null, array('class' => 'control-label')) }}
                                        {{ Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'enter image name')) }}
                                        <span class="help-block">please enter related name of image</span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    {{ Form::label('category', null, array('class' => 'control-label')) }}
                                    {{ Form::select('category', [
                                     '' => 'Please select category','General' => 'General', 'Nature' => 'Nature','Macro' => 'Macro','Portrait' => 'Portrait','Sports' => 'Sports','Architecture' => 'Architecture','Astrophotography' => 'Astrophotography','Animal' => 'Animal','Documentary' => 'Documentary','Fashion' => 'Fashion','Electronics ' => 'Electronics ','Industrial' => 'Industrial','Vehicle' => 'Vehicle','Product' => 'Product','Other' => 'Other'
                                    ],null,['class' => 'form-control']) }}
                                </div>
                                <div class="form-group col-sm-12">
                                    {{ Form::label('type', null, array('class' => 'control-label')) }}
                                    {{ Form::select('type', [
                                    '' => 'Please select type','.png' => '.png', '.jpg' => '.jpg','.gif' => '.gif','.jpeg' => '.jpeg'
                                    ],null,['class' => 'form-control']) }}
                                </div>
                                <div class="form-group col-sm-12 text-center">
                                    <button type="submit" class="btn btn-success">Upload <i class="fa fa-upload"></i></button>
                                </div>
                           {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection