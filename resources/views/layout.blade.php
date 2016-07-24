<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Grocery Buddy</title>
</head>
<body>
  <a href="{{route('stores.index')}}">Stores</a>
  <a href="{{route('shopping-lists.index')}}">Shopping Lists</a>

  @yield('content')
</body>
</html>
