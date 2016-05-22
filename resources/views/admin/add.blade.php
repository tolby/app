@extends('lyouts.admin')

@section('content')
    <h4>Add Offer</h4>
    <hr>
    {!! Form::open(['method' => 'POST', 'action' => 'OrdersController@store' ]) !!}

    <div class="input-group">
        <span class="input-group-addon">
            Order Code
        </span>
        {!! Form::text('order_code',null,['class' => 'form-control']) !!}
    </div>
    <br>


    {{--<div class="input-group">--}}
             {{--<span class="input-group-addon">--}}
               {{--Product--}}
             {{--</span>--}}
        {{--{!! Form::text('product',null,['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<br>--}}

    <div class="input-group">
             <span class="input-group-addon">
               First Name
             </span>

        {!! Form::text('first_name',null,['class' => 'form-control']) !!}
    </div>
    <br>

    <div class="input-group">
             <span class="input-group-addon">
               Last Name

             </span>
        {!! Form::text('last_name',null,['class' => 'form-control']) !!}
    </div>
    <br>

    <div class="input-group">
              <span class="input-group-addon">
                Delivery Date
              </span>
        {!! Form::text('delivery_date',null,['class' => 'form-control']) !!}
    </div>
    <br>

    <div class="input-group">
             <span class="input-group-addon">
               Status
             </span>
        {{--{!! Form::select('status',--}}
        {{--['Procesing' => 'Procesing','Delivered' => 'Delivered','Payed' => 'Payed','Shipped' => 'Shipped'],null,--}}
        {{--['class' => 'form-control','placeholder' => 'Choose status','required'=>'required']) !!}--}}
    </div>
    <br>
    {!! Form::submit('Add Offer',['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@stop