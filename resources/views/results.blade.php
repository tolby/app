@extends('lyouts.user')
@section('content')
      <table class="table table-hover">
      	<thead>
      		<tr>
      			<th>Order Code</th>
                <th>Product</th>
                <th>Name</th>
                <th>Delivery Date</th>
                <th>Status</th>
      		</tr>
      	</thead>
      	<tbody>
      		<tr>
      			<td>{!! $d->order_code !!}</td>
                <td>{!! $d->product !!}</td>
                <td>{!! $d->first_name !!} {!! $d->last_name !!}</td>
                <td>{!! $d->delivery_date !!}</td>
                <td>{!! $d->status !!}</td>
      		</tr>
      	</tbody>
      </table>

@stop