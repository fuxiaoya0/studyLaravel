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
        <h3>Hello,world!</h3>
    </div>
</div>
<div class="container" style="min-height: 800px;">
    <div class="row">
        @include('web.left')
        <div class="col-sm-9">
            <div class="container">
                @section("container")
                    container
                @show
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container" style="border-top: 2px solid #f7f7f7;">
        <div class="row">
            <div class="col-sm-12">
                <p style="text-align: center; margin-top: 10px;">
                    <a href="{{ url("/advise")}}">{{ __('system.i_want_say') }}</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>