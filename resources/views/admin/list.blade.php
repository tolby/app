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
        			<th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
        		</tr>
        	</tbody>
        </table>
    
    @endif
   {{ $data->render() }}
@stop