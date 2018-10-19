<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!--最小限のビューポート設定-->
  <meta name="viewport" content="width=device-width">
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css')}}">
  @yield('css')
</head>
<body>
  @include('header0')
  <div class="container" style="padding-top: 120px; ">
      {{-- リクエストに応じてコンテンツ部分のみ入れ替える --}}
      @yield('content')
  </div>
  @include('footer')

  {{-- js埋め込み --}}
  <script type="text/javascript" src="{{asset('js/jquery-3.1.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-migrate-1.4.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  @yield('js')
</body>
</html>