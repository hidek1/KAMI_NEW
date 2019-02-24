@extends('layout')
@section('css')
  <link rel="stylesheet" href="css/common.css">

  {{-- CDN(Content Delivery Network) --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all"/>
@endsection

@section('content')
<div class="main userForm">
    <h1>新規会員入力フォーム</h1>
    <h3><span class="required">※</span>入力フォームは,このページのみです</h3>
    <form enctype="multipart/form-data" method="post" action="{{ route('register') }}">
      {{ csrf_field() }}

        <table class="loginDetails">
            <tr class="firstTr">
                <th><span>ニックネーム</span><span class="required">※</span></th>
                <td><input class="requiredDetails empty" type="text" name="name" placeholder="kami 4文字以上"></td>
            <td class="nickNameError">ニックネームは4文字以上15文字以下</td>
            </tr>
            <tr>
                <th><span>メールアドレス</span><span class="required">※</span></th>
                <td><input class="requiredDetails empty" type="email" name="email" placeholder="kami@kamimail.com"></td>
            <td class="emailError">正しい形式で入力してください</td>
            </tr>
            <tr>
                <th><span>パスワード</span><span class="required">※</span></th>
                <td><input class="requiredDetails empty" type="password" name="password" placeholder="8文字以上"></td>
                <td class="passwordShort"><i class="fas fa-exclamation-circle"></i> パスワードは８文字以上で設定してください。</td>

            </tr>
            <tr>
                <th><span>パスワード(確認用)</span><span class="required">※</span></th>
                <td><input class="requiredDetails" type="password" name="password_confirmation" placeholder="上と同じパスワード" disabled></td>
                <td class="passwordMiss"><i class="fas fa-exclamation-circle"></i> パスワードが一致していません。</td>
                <td class="passwordMatch"><i class="fas fa-check-circle"></i> パスワードが一致しました。</td>

            </tr>
            <tr class="stayPeriod">
                <th><span>滞在期間</span></th>
                <td><span class="dateFrom">From</span><input type="date" placeholder="YYYY/MM/DD" name="contractDTFrom"></td>
            <td>
              <div>
              </div>
            </td>
            <th></th>
                <td><span class="dateFrom">To&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="date" placeholder="YYYY/MM/DD" name="contractDTTO"></td>
            </tr>
            <tr>
              <th><span>部屋番号</span></th>
              <td><input pattern="^[0-9A-Za-z]+$" class="requiredDetails" type="text" name="roomNumber" placeholder="777"></td>
              <td class="roomNumberError">半角英数字 5文字以内</td>
            </tr>
            <tr>
                <th><span>プロフィール画像</span></th>
                <td><label><i class="fas fa-upload faa-bounce animated"></i>&nbsp;&nbsp;アップロード<input accept="image/*" type="file" name="profilePic"></label></td>
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
    <script>


        //必須項目が送信時、値が空かどうか
        $('form').on('submit', function() {
          if(($("input").hasClass('error')) || ($("input").hasClass('empty')) || (!($(".passwordMatch").hasClass("on")))){
            $("html,body").animate({scrollTop:0});
            $('.empty').css('background-color','#ffdfd8 ');
            console.log("error")
            return false;
          } else {
           // エラーがなかった場合
           return true;
          }
        });


    //ニックネームバリデーション 4文字以上１５文字以下

    $("input[name='name']").blur(function(){
    if(($(this).val().length < 4)  || ($(this).val().length > 15) ){
      $(this).addClass("error");
      $(this).css('background-color','#ffdfd8  ');
      $('.nickNameError').addClass("on");
    }else{
      $(this).removeClass("error");
      $('.nickNameError').removeClass("on");
      $(this).css('background-color','white');
    }
    $(this).removeClass("empty");
    });


    $("input[name='name']").keyup(function(){
    if(!($(this).hasClass('empty'))) {
    if(($(this).val().length < 4)  || ($(this).val().length > 15) ){
      $(this).addClass("error");
      $(this).css('background-color','#ffdfd8  ');
      $('.nickNameError').addClass("on");
    }else{
      $(this).removeClass("error");
      $('.nickNameError').removeClass("on");
      $(this).css('background-color','white');
    }
    }
    });

    //メールアドレスバリデーション
    $("input[name='email']").blur(function(){
    if(!$(this).val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)){
      $(this).addClass("error");
      $(this).css('background-color','#ffdfd8  ');
      $('.emailError').addClass("on");
    }else{
      $(this).removeClass("error");
      $('.emailError').removeClass("on");
      $(this).css('background-color','white');
    }
    $(this).removeClass("empty");
    });


    $("input[name='email']").keyup(function(){
    if(!($(this).hasClass('empty'))) {
    if(!$(this).val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)){
      $(this).addClass("error");
      $(this).css('background-color','#ffdfd8  ');
      $('.emailError').addClass("on");
    }else{
      $(this).removeClass("error");
      $('.emailError').removeClass("on");
      $(this).css('background-color','white');
    }
    }
    });

    //部屋番号バリデーション
    $("input[name='roomNumber']").keyup(function(){
    if((!$(this).val().match(/^[a-zA-Z0-9]+$/)) ||($(this).val().length > 5) ){
      $(this).addClass("error");
      $(this).css('background-color','#ffdfd8  ');
      $('.roomNumberError').addClass("on");
    }else{
      $(this).removeClass("error");
      $('.roomNumberError').removeClass("on");
      $(this).css('background-color','white');
    }
    if($(this).val() == ""){
      $(this).removeClass("error");
      $('.roomNumberError').removeClass("on");
      $(this).css('background-color','white');
    }
    });




    //パスワードバリデーション

    // var password =        リアルタイムのパスワードの値を代入したもの
    // var password_confirmation = リアルタイムの確認用のパスワードの値を代入したもの
    // var passwordCheck =   パスワードが一致してるかの判定開始フラグ
    // var passwordMatch =   パスワードが一致してるフラグ




    //初めてパスワードにフォーカスし、フォーカスから外れて値が8文字以下だった場合
           // class error(フラグ)を立てる
          // パスワードの背景色をエラーの色に変える
          // エラー文をdisplayに表示


    //パスワードがフォーカスから外れて値が8文字以上だった場合
          //class error,empty(フラグ)をなくす
          //背景色を白に戻す
          //確認用のパスワードを入力できるようにする
          //パスワードの値を変数passwordに代入する
        var password_confirmation = "";
        var passwordCheck ="";
        var password = "";
        $("input[name='password']").blur(function(){
            if($(this).hasClass('empty')) {
               if($(this).val().length < 8){
                    $(this).addClass("error");
                    $(this).css('background-color','#ffdfd8');
                    $(".passwordShort").addClass("on");
         }else{
                    password = $(this).val();
                    $(this).removeClass("error");
                    $(this).removeClass("empty");
                    $(this).css('background-color','white');
                    $(".passwordShort").removeClass("on");
               }
            }
        });
    /*==========================================================================*/

    //パスワードを1回８文字以上にしてそのあとパスワード編集して値が8文字以下だった場合
         // errorフラグを立てる
         // パスワードの背景色をエラーの色に変える
         // 変数passwordを更新
         // エラー文をdisplayに表示




    //パスワードを1回８文字以上にしてパスワード編集して値が8文字以上だった場合
         // errorフラグをなくす
         // パスワードの背景色を白に変える
         // エラー文をdisplayをなくす

         // 変数passwordを更新

    //パスワードを1回でも８文字以上にした場合、
          // 確認用のパスワードを入力できるようにする

    //一致してるかの判定開始フラグがたったあと
         //もし一致してるならばエラー文削除、マッチ文表示
         //一致していない場合　エラー文表示　マッチ文削除

         $("input[name='password']").keyup(function(){
             if(!($(this).hasClass('empty'))) {
                if($(this).val().length < 8){
                   $(this).addClass("error");
                   $(this).css('background-color','#ffdfd8');
                   $(".passwordShort").addClass("on");
                }else{
                    $(this).removeClass("error");
                    $(this).css('background-color','white');
                    $(".passwordShort").removeClass("on");
                }
                password = $(this).val();
             }else{
                if($(this).val().length >= 8){
                    $("input[name='password_confirmation']").prop('disabled', false);
                }
             }

             if(passwordCheck == "on"){
               if((password_confirmation == $(this).val()) && ($(this).val().length >= 8)){
                   $(".passwordMiss").removeClass("on");
                   $(".passwordMatch").addClass("on");
                }else{
                   $(".passwordMiss").addClass("on");
                   $(".passwordMatch").removeClass("on");

                   if($(this).val().length < 8){
                    $(".passwordMiss").removeClass("on");
                   }
                }
            }
         });

    /*==========================================================================*/


    //パスワード確認用が一致するかどうか

    // パスワード確認用が８文字以上になったときから
    // パスワード一致判定開始
    //もし一致してるならばエラー文削除、マッチ文表示
    //一致していない場合　エラー文表示　マッチ文削除
        $("input[name='password_confirmation']").keyup(function(){
            if($(this).val().length >= 8){
              passwordCheck = "on";
            }


            if(passwordCheck == "on"){
               if((password == $(this).val()) && (password.length >= 8)){
                   $(".passwordMiss").removeClass("on");
                   $(".passwordMatch").addClass("on");
                   password_confirmation = $(this).val();
                }else{
                   $(".passwordMiss").addClass("on");
                   $(".passwordMatch").removeClass("on");
                   password_confirmation = $(this).val();
                   if(password.length < 8){
                    $(".passwordMiss").removeClass("on");
                   }
                }
            }
        });

        // カレンダー
        $('#datepicker').datepicker({
            showButtonPanel:true,
            changeMonth: true
        });

        // プロフィール画像アップロード

        $(function() {
            $('input[type=file]').after('<span></span>');

            // アップロードするファイルを選択
            $('input[type=file]').change(function() {
                var file = $(this).prop('files')[0];

                // 画像以外は処理を停止
                if (! file.type.match('image.*')) {
                // クリア
                 $(this).val('');
                 $('span').html('');
                 return;
                }
            // 画像表示
            var reader = new FileReader();
            reader.onload = function() {
               var img_src = $('<img>').attr('src', reader.result);
               $("#preview").html(img_src);
            }
              reader.readAsDataURL(file);
            });
        });
    </script>
@endsection

