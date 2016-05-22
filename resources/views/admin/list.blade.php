@extends('lyouts.admin')

@section('content')
    <a href="{{ route('admin.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add Order</a>
   <div class="clearfix"></div>
    <br>

    @if($data->isEmpty())
    <div class="alert alert-info">
    	 
    	<strong>There are no orders added</strong>  
    </div>
    @else
        
        <table class="table table-hover">
        	<thead>
        		<tr>
        			<th>ID</th>
                    <th>Order Code</th>
                    <th>Status</th>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Delivery Date</th>
                    <th>Modify</th>
                    <th>Delete</th>
                    
        		</tr>
        	</thead>
        	<tbody>
            @foreach($data as $d)
        		<tr>
        			<td>{!! $d->id !!}</td>
                    <td>{{ $d->order_code }}</td>
                    <td>{{ $d->status }}</td>
                    <td>{{ $d->product }}</td>
                    <td>{{ $d->first_name }} {!! $d->last_name !!}</td>
                    <td>{!! $d->delivery_date !!}</td>
                    <td><a href="{!! url('admin/'.$d->id.'/edit') !!}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td>

                   {!! Form::open(['method' => 'DELETE', 'action' => ['OrdersController@destroy',$d->id ]]) !!}
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    {!! Form::close() !!}

                    </td>

        		</tr>
           @endforeach
        	</tbody>
        </table>
    
    @endif

@stop