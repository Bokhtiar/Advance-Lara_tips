<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="text-center">
    <ul class="list-group">
        <li class="list-group-item"> <a href="{{ url('check_curl') }}">Crul request check</a> </li>
        <li class="list-group-item"> <a href="{{ url('user-location') }}">user location</a> </li>
        <li class="list-group-item"> <a href="{{ url('date') }}">tow date get data as like 10-12 all user</a> </li>
        <li class="list-group-item"> <a href="@route('todo.index')">Todo</a> </li>
        <li class="list-group-item"><a href="{{ url('todo/customer') }}">customer</a></li>
        <li class="list-group-item"><a href="{{ url('todo/staff') }}">staff</a></li>
        <span>Middleware</span>
        <li class="list-group-item"><a href="{{ url('check-todo') }}">Check Middleware</a></li>
        <span>Controller</span>
        <li class="list-group-item"><a href="@route('single')">Signle(invokable)</a></li>
        <li class="list-group-item"><a href="@route('partial.index')">partial route</a></li>
        <li class="list-group-item"><a href="@route('except-partial.index')">Except partial route</a></li>
        <span>Contact</span>
        <li class="list-group-item"><a href="{{ url('contact?contact=0') }}">supplier</a></li>
        <li class="list-group-item"><a href="{{ url('contact?contact=1') }}">customer</a></li>

      </ul>

      @yield('cotnent')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
