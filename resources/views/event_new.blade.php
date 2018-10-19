@extends('layout')
@section('css')
  <link rel="stylesheet" href="css/bootstrap.css">
  {{-- Temporaly --}}
  <link rel="stylesheet" href="css/dark_temp.css">
  {{-- <link rel="stylesheet" href="css/debug/base.css"> --}}
  {{-- <link rel="stylesheet" href="css/debug/vendor.css"> --}}
  {{-- <link rel="stylesheet" href="css/debug/pooh_main.css"> --}}
  {{-- <link rel="stylesheet" href="css/debug/pooh_bootstrap.css"> --}}
@endsection

@section('content')
  <div class="container-fulid">
    <form action="POST">
      <div class="row" style="padding-top: 3rem">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbspイベント名</div>
        </div>
        <div class="col-xs-8">
          <input class="input__space" type="text" name="Name">
        </div>
      </div>
      <div class="row" style="padding-top: 3rem">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbsp開始時間</div>
        </div>
        <div class="col-xs-4">
          <input class="input__space" type="date" name="startDate" min="" style="text-align: center;">
        </div>
        <div class="col-xs-4">
          <input class="input__space" type="time" name="startTime" step="300" style="text-align: center;">
        </div>
      </div>
      <div class="row" style="padding-top: 3rem;">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbsp店名</div>
        </div>
        <div class="col-xs-8">
          <input class="input__space" type="text" name="Name">
        </div>
      </div>
      <div class="row" style="padding-top: 3rem;">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbsp自由記入欄</div>
        </div>
        <div class="col-xs-8">
          <input class="input__space" type="text" name="Name">
        </div>
      </div>
      <div class="row" style="padding-top: 3rem">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbspイベント写真</div>
        </div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-12">
              <input type="checkbox"><span>&nbspお店の写真を使う</span>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <input type="file">
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top: 3rem">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbsp招待</div>
        </div>
        <div class="col-xs-8" >
          <input class="input__space" type="text">
        </div>
      </div>
      <div class="row" style="padding-top: 3rem">
        <div class="col-xs-4" >
          <div class="golden-ratio-font__larger5 input__item" style="height: 7.5rem">&nbspタグ</div>
        </div>
        <div class="col-xs-8" >
          <div class="row">
            <div class="col-xs-12">
              <input type="checkbox"><span>&nbsp先生も参加する</span>
            </div>
            <div class="col-xs-12">
              <input type="checkbox"><span>&nbspグラパ</span>
            </div>
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-4">
                  <input type="checkbox" style="display: inline;">&nbsp金額指定する
                </div>
                <div class="col-xs-1">
                  <span>約</span>
                </div>
                <div class="col-xs-4">
                  <input class="input__space--amount" type="text">
                </div>
                <div class="col-xs-3">
                  <span>PHP</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top: 3rem">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbsp詳細</div>
        </div>
        <div class="col-xs-8">
          <textarea class="input__space"></textarea>
        </div>
      </div>
      <div class="row" style="padding-top: 3rem;">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbsp集合時間</div>
        </div>
        <div class="col-xs-8">
            <input class="input__space" type="time" name="startTime" step= "300" style=" text-align: center;">
        </div>
      </div>
      <div class="row" style="padding-top: 3rem;">
        <div class="col-xs-4" >
          <div class="golden-ratio-font__larger5 input__item">&nbsp集合場所</div>
        </div>
        <div class="col-xs-8">
          <input class="input__space" type="text" name="">
        </div>
      </div>
      <div class="row" style="padding-top: 3rem;">
        <div class="col-xs-4" >
          <div class="golden-ratio-font__larger5 input__item">&nbsp参加人数</div>
        </div>
        <div class="col-xs-1 golden-ratio-font__larger4">
          <div>MAX</div>
        </div>
        <div class="col-xs-3">
          <input class="input__space" type="number" name="sampleNumber" min="0" max="100" step="1" style="text-align: center;">
        </div>
        <div class="col-xs-1 golden-ratio-font__larger4">
          <div>MIN</div>
        </div>
        <div class="col-xs-3">
          <input class="input__space" type="number" name="sampleNumber" min="0" max="100" step="1" style="text-align: center;">
        </div>
      </div>
      <div class="row" style="padding-top: 3rem;">
        <div class="col-xs-4">
          <div class="golden-ratio-font__larger5 input__item">&nbsp回答期限</div>
        </div>
        <div class="col-xs-4">
          <input class="input__space" type="date" name="startDate" min="" style="text-align: center;">
        </div>
        <div class="col-xs-4">
          <input class="input__space" type="time" name="startTime" step="300" style="text-align: center;">
        </div>
      </div>
    </form>
  </div>
  <div class="container-fulid">
    <div class="row" style="padding-top: 5rem;">
      <div class="col-xs-2"></div>
      <div class="col-xs-3" style="text-align: center;">
        <a href="index.html"><button class="button__cancel" type="button">キャンセル</button></a>
      </div>
      <div class="col-xs-2"></div>
      <div class="col-xs-3" style="text-align: center;">
        <button class="button__make" type="submit">作成</button>
      </div>
      <div class="col-xs-2"></div>
    </div>
  </div>
  <div class="container-fulid">
    <div class="row" style="padding-top: 5rem;">
    </div>
  </div>
@endsection