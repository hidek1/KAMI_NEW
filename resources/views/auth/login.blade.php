@extends('layout')
@section('css')
  {{-- ペロ様確認POINT1 --}}
  {{-- bootstrap不使用ペロ様確認済み --}}
  {{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/iventDetails.css">

  {{-- CDN(Content Delivery Network) --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all"/>
@endsection

@section('content')
  {{-- ペロ様確認POINT2 --}}
  {{-- レイアウト側のヘッダーと競合するためコメントアウト --}}
<div class="main">
  <form>
    <table class="loginDetails">
      <tr class="firstTr">
        <th><span>メールアドレス</span></th>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <th><span>パスワード</span></th>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="任意" value="ホームページ" id="hp" />
                         <label for="hp" class="check_css"><span class="autoLogin">次回から自動ログイン</span></label>
                    </td>
      </tr>
    </table>
        <div class="move"><input type="submit" value="ログイン">
        <input type="button" onclick="location.href='userForm.html'" value="新規会員登録"></div>
  </form>
</div>
@endsection

@section('js')
  {{-- CDN(Content Delivery Network) --}}
  <script tupe="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@endsection
