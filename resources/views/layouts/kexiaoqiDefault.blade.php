<!DOCTYPE html>
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