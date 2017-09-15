
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Movies Online</title>
    <link rel="stylesheet" href="{{asset('layouts/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('layouts/css/bootstrap.css')}}">
</head>

<body>
<div class="container-fluid">
    <nav class="navbar  navbar-dark bg-primary">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
            &#9776;
        </button>
        <div class="collapse navbar-toggleable-xs" id="navbar-header">
            <a class="navbar-brand" href="#">Movies Store</a>

        </div>
    </nav>

@yield('changingContent')
</div>

    <script src="{{asset('layouts/js/bootstrap.js')}}"></script>
    <script src="{{asset('layouts/js/jquery3.min.js')}}"></script>
</body>

</html>