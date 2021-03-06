<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
@include('flash::message')
 <div class="container">
     <div class="row">
         <h3 class="text-center header-text">Admin Area</h3>
         <hr>
     </div>
     <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
         	<ul class="list-group">
                <li class="list-group-item active">Menu</li>

                <li class="list-group-item"><a href="{{ route('admin.create') }}"><i class="fa fa-plus-circle"></i> Add Order</a></li>
                <li class="list-group-item"><a href="{{ route('admin.index') }}"><i class="fa fa-gear"></i> Manage Orders</a></li>
                <li class="list-group-item"><a href="{!! url('/') !!}"><i class="fa fa-globe"></i> View Site</a></li>
            </ul>
         </div>

         <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
               @yield('content')
         </div>

     </div>

 </div>


<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 <script>
     $('#flash-overlay-modal').modal();
 </script>
</body>
</html>