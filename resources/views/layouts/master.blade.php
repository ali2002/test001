<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        .body{
            background-color:rgba(228, 121, 0, 1);
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body class="body">
@include('includes.header')
<div class="container">
    @yield('content')
</div>
</body>
</html>
