<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script type="text/javascript" src="{{ config('view.paths.js')}}/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="./bootstrap-3.3.7/js/bootstrap.js"></script>
    <link rel="stylesheet" href="./bootstrap-3.3.7/css/bootstrap.css">
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h1>Hello,world!</h1>
    </div>
</div>
@section("body")
    这里是body
@show
</body>
</html>