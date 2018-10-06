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
                            <img src="{{ asset("img/logo.png") }}" alt="" class="img-responsive center-block">
                        </div>
                    </div>

                     <br><br>

                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ url('/search') }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-sm-12">
                                    <div class="input-group col-sm-12">
                                        <input type="text" class="form-control" name="query" placeholder="Search with Name or Category or Type" required>
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default"> <i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
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
