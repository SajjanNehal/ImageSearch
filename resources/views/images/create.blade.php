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
                                        <label for="name">Please select image:</label>
                                        <input type="file" id="name" name="image" required>
                                        <span class="help-block">image must be less than size: 2MB</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Image Name:</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter image name" name="name" required>
                                        <span class="help-block">please enter related name of image</span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="category">Category:</label>
                                    <select class="form-control" id="category" name="category">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="sub_category">Sub Category:</label>
                                    <select class="form-control" id="sub_category" name="sub_category">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="type">Type:</label>
                                    <select class="form-control" id="type" name="type">
                                        <option value=".png">.png</option>
                                        <option value=".jpg">.jpg</option>
                                        <option value=".gif">.gif</option>
                                        <option value=".jpeg">.jpeg</option>
                                    </select>
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