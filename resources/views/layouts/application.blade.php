<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Welp</title>

    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <link rel="stylesheet" href="{{ asset('stylesheets/master.css') }}">

    <?php tml_scripts() ?>
</head>
<body>

@include('layouts.navigation')

@yield('content')

<script type="text/javascript" src="{{ asset('javascripts/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('javascripts/bootstrap.min.js') }}"></script>

</body>
</html>
