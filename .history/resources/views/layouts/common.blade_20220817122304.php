<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>advance_test</title>
  <link href="{{ asset('/css/reset.css')}}" rel="stylesheet">
  <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
</head>
<body>
    @yield('content')
    
    <input type="button" id="openBtn" value="開く" class="openBtn">
        <div id="modal" class="modal">
          <div class="modal__content">
            <div class="modal__content-inner">
              <p>モーダル</p>
              <input type="button" id="closeBtn" value="閉じる">
            </div>
          </div>
        </div>

  <script src="{{ asset('/js/common.js')}}"></script>
</body>
</html>