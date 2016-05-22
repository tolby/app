<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                <li class="list-group-item">Add Order</li>
                <li class="list-group-item">Manage Orders</li>
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