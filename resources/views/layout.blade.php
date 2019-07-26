<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>MV Image</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <link href="{{ asset('css/layout.css') }}" rel="stylesheet" type="text/css" />


</head>
<body>

    @yield('layoutBody')

  <!--<script src="{{ asset('js/app.js') }}" type="text/js"></script> -->
</body>
</html>
