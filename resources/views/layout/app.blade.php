<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel_curd</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    /* .custom-form {
        width: 40%;
        margin: auto;
    }

    .cus-btn {
        display: flex;
        justify-content: center;
    } */
</style>

<body>
    <ul class="nav bg-dark">
        <li class="nav-item">
            <a class="nav-link text-light" href="/">New product</a>
        </li>

    </ul>

    @if($message = Session::get( 'success' ))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @yield('main')

</body>

</html>