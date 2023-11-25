<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InterView</title>
    <link rel="stylesheet" href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/css/singin.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/bootstrap/js/bootstrap.min.js') !!}">

</head>

<body>

    <main class="text-center mt-5">
      <div class="container text-center">
        @yield('content')
      </div>
    </main>
</body>

</html>
