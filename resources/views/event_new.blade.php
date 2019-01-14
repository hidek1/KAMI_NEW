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
  <div class="main userForm">
    <h1>イベント入力フォーム</h1>
    <form enctype="multipart/form-data" method="post" action="check.html">
      <table class="loginDetails iventDetails">
        <tr class="firstTr">
          <th>
            <span>イベント名</span>
          </th>
          <td>
            <input class="requiredDetails empty" type="text" name="iventName" placeholder="kami">
          </td>
        </tr>
        <tr>
          <th>開催日時</th>
          <td>
            <input type="datetime-local" name="datetime">
          </td>
        </tr>
        <tr>
          <th>開催場所</th>
          <td>
            <input type="text" name="place" placeholder="siknoy">
          </td>
        </tr>
        <tr>
          <th>予算</th>
          <td>約&nbsp
            <input type="number" name="budget">&nbsp〜&nbsp<input type="number" name="budget">&nbspPHP
          </td>
        </tr>
        <tr class="iventCategories">
          <th class="iventCategories_tag">タグ</th>
            {{-- ペロ様確認POINT3 --}}
            {{-- けいごさんにも確認取りましたが下記tdタグ内インデントするとスペース等の関係で表示がおかしくなるとの事でインデント無しで記載 --}}
            <td>
              <input type="checkbox" value="1" name="iventCategory1" id="iventCategory1"><label class="check_css" for="iventCategory1"><span>歓迎会</span></label><input type="checkbox" value="1" name="iventCategory2" id="iventCategory2"><label class="check_css" for="iventCategory2"><span>送別会</span></label><input type="checkbox" value="1" name="iventCategory2" id="iventCategory3">
              <label class="check_css" for="iventCategory3"><span>打ち上げ</span></label><input type="checkbox" value="1" name="iventCategory3" id="iventCategory4"><label class="check_css" for="iventCategory4"><span>先生も参加可</span></label>
              <input type="checkbox" value="1" name="iventCategory4" id="iventCategory5"><label class="check_css" for="iventCategory5"><span>Nexseed生のみ</span></label><input type="checkbox" value="1" name="iventCategory5" id="iventCategory6"><label class="check_css" for="iventCategory6"><span>誰でも参加可</span></label>
            </td>
        </tr>
        <tr class="textarea">
          <th>イベント詳細</th>
          <td>
            <textarea name="iventDetail" cols="50" rows="5"></textarea>
          </td>
        </tr>
        <tr>
          <th>
            <span>お問い合わせ</span>
          </th>
          <td>
            <input class="requiredDetails empty" type="email" name="email" placeholder="kami@kamimail.com">
          </td>
        </tr>
        <tr>
          <th>
            <span>イベント写真</span>
          </th>
          <td>
            <label class=upload_btn>
              <i class="fas fa-upload faa-bounce animated"></i>&nbsp;&nbsp;アップロード<input accept="image/*" type="file" name="profilePic">
            </label>
          </td>
          <br>
          <td id="preview"></td>
        </tr>
      </table>
      <div class="move">
        <input type="button" onclick="history.back()" value="戻る">
        <input class= "submit" type="submit" value="確認画面へ">
      </div>
    </form>
  </div>
@endsection

@section('js')
  {{-- CDN(Content Delivery Network) --}}
  <script tupe="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@endsection