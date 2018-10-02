@extends('layout')
@section('css')
<style>
.profile-img {
  width: 200px;
  height: 200px;
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
  border-radius: 50%;
}
.edit-button {
  margin-top: 20px;
}
.menus {
  border-top: 1px solid #efefef;
  margin-top: 20px;
}
.square_btn {
    display: inline-block;
    padding: 0.3em 1em;
    text-decoration: none;
    color: #67c5ff;
    border: solid 2px #67c5ff;
    border-radius: 3px;
    transition: .4s;
}
.square_btn:hover {
    background: #67c5ff;
    color: white;
}
.profile-link {
  color: gray;
}
.selected {
  color: black;
}
@media screen and (max-width:375px) {
.profile-box {
  padding-top: 20px;
}
}
</style>
@endsection
@section('content')
<div class="row">
  <div class="col-md-3 col-md-offset-3 col-xs-4 profile-box">
   <img src="{{asset('http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg')}}" class="center-block profile-img">
  </div>
  <div class="col-md-3 col-xs-8">
    <h2>Taro Yamada</h2>
    <h3>部屋番号: 1001</h3>
    <a href="#" class="square_btn">プロフィールを編集</a>
  </div>
</div>
<div class="row menus">
  <div class="col-md-5 col-xs-6" style="text-align: right;">
    <a href="" class="profile-link selected">参加予定のイベント</a>
  </div>
  <div class="col-md-1">
  </div>
  <div class="col-md-6 col-xs-6">
    <a href="" class="profile-link">興味があるイベント</a>
  </div>
</div>
@endsection
@section('js')
<script>
$(function(){
function getBoxWidth(){
width=$(".profile-box").width();
height=width;
$(".profile-box").height(height);
}
getBoxWidth();
$(window).resize(function() {
   getBoxWidth();
});
});
</script>
@endsection
