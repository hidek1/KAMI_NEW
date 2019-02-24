@extends('layout')
@section('css')
  <link rel="stylesheet" href="css/common.css">

  {{-- CDN(Content Delivery Network) --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all"/>
@endsection

@section('content')
<div class="main">
  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
    <table class="loginDetails">
      <tr class="firstTr">
        <th><span>メールアドレス</span></th>
        <td><input type="email" name="email"></td>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </tr>
      <tr>
        <th><span>パスワード</span></th>
        <td><input type="password" name="password"></td>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
      </tr>
      <tr>
        <td><input type="checkbox" name="任意" value="ホームページ" id="hp" />
                         <label for="hp" class="check_css"><span class="autoLogin">次回から自動ログイン</span></label>
                    </td>
      </tr>
    </table>
        <div class="move"><input type="submit" value="ログイン">
        <input type="button" onclick="location.href='register'" value="新規会員登録"></div>
  </form>
</div>
@endsection

@section('js')
  {{-- CDN(Content Delivery Network) --}}
  <script tupe="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@endsection
