<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tracking Orders</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
<div class="container">
    <div class="row heads">
        <h3 class="text-center header-text">Track Your Order</h3>
    </div>
    <div class="row">
        @yield('content')
    </div>

</div>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
    $('#flash-overlay-modal').modal();
</script>
</body>
</html>