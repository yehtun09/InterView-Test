<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LV Authentication</title>
    <link rel="stylesheet" href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/bootstrap/js/bootstrap.min.js') !!}">

</head>

<body>
    @include('layouts.partials.nav')
    <main class="form-signin text-center">
        @yield('content')
    </main>
</body>

</html>
