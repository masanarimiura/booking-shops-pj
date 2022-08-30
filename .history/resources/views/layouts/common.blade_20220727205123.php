<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>advance_test</title>
  <link href="{{ asset('/css/reset.css')}}" rel="stylesheet">
  <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
  <script src="{{ asset('/js/common.js')}}" type="text/javascript">const target = document.getElementById("menu");
target.addEventListener('click', () => {
  target.classList.toggle('open');
  const nav = document.getElementById("nav");
  nav.classList.toggle('in');
});</script>
</head>
<body>
  @include('components.drawer')
  @yield('content')
</body>
</html>