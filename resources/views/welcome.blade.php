@extends('lyouts.user')
@section('content')
    <div class="jumbotron">
        {!! Form::open(['method' => 'POST', 'action' => 'OrdersController@search' ]) !!}

        <div class="input-group">
            <span class="input-group-addon">
              Order Code
            </span>
            {!! Form::text('search',null,['class' => 'form-control']) !!}
        </div>
        <br>
        {!! Form::submit('Search',['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
     <div class="row text-center"><a href="{{ url('admin') }}">Admin</a></div>
@stop