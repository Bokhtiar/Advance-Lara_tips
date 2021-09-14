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
        <li class="list-group-item"> <a href="@route('todo.index')">Todo</a> </li>
        <li class="list-group-item"><a href="{{ url('todo/customer') }}">customer</a></li>
        <li class="list-group-item"><a href="{{ url('todo/staff') }}">staff</a></li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
      </ul>

      @yield('cotnent')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
