@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to Image Search</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{ asset("images/logo.png") }}" alt="" class="img-responsive center-block">
                        </div>
                    </div>

                     <br><br>

                    <div class="row">
                        <div class="col-sm-12">
                            <form class="navbar-form" action="/result" method="post">
                                {{ csrf_field() }}
                                <div class="col-sm-12">
                                    <div class="input-group col-sm-12">
                                        <input type="text" class="form-control" name="query" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default"> <i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <br>

                    <div class="row text-center">
                        <div class="col-sm-12">
                            <h3>OR</h3>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <form class="navbar-form" action="/result" method="post">
                                {{ csrf_field() }}
                                <div class="form-group col-sm-3">
                                    <label for="category">Category:</label>
                                    <select class="form-control" id="category">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="sub">Sub Category:</label>
                                    <select class="form-control" id="sub">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="type">Type:</label>
                                    <select class="form-control" id="type">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-1">
                                    <button type="submit" class="btn btn-success">Search <i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
