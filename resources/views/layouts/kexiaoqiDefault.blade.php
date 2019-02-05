<!DOCTYPE html>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<html>
  <head>
    <title>@yield('title', '关于')柯晓齐</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>

  <body>

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @yield('content')
      </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>