<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/base.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  @yield('css')
</head>
<body>
  @include('header')
  <div class="container">
    <div class="row">
      {{-- リクエストに応じてコンテンツ部分のみ入れ替える --}}
      @yield('content')
    </div>
  </div>
  @include('footer')

  {{-- js埋め込み --}}
  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-3.1.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-migrate-1.4.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>