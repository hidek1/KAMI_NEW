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
.profile-events {
  margin-top: 50px;
}
.participants{
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 50%;
}
.p-row {
  margin-bottom: 50px;
}
.buttons {
  text-align: center;
}
@media screen and (max-width:375px) {
.profile-box {
  padding-top: 20px;
}
.participants{
  width: 50px;
  height: 50px;
  object-fit: cover;
  border-radius: 50%;
}
.flickity-prev-next-button {
    width: 25px;
    height: 25px;
}
}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/flickity.min.css')}}">
<script type="text/javascript" src="{{asset('js/flickity.pkgd.min.js')}}"></script>
@endsection
@section('content')
<div class="row">
  <div class="col-md-3 col-md-offset-3 col-xs-4 profile-box">
   <img src="{{asset('http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg')}}" class="center-block profile-img">
  </div>
  <div class="col-md-3 col-xs-8">
    <h2>Taro Yamada</h2>
    <h3>部屋番号: 1001</h3>
    <a href="#" class="square_btn" data-toggle="modal" data-target="#myModal-data2">プロフィールを編集</a>
      <div class="modal fade" id="myModal-data2" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">プロフィール編集</h4>
                  </div>
                  <div class="modal-body">
                      <form>
                          <div class="form-group">
                              <label for="exampleInput1">名前</label>
                              <input type="text" class="form-control" id="exampleInput1" placeholder="#">
                          </div>
                          <div class="form-group">
                              <label for="exampleInput2">部屋番号</label>
                              <input type="text" class="form-control" id="exampleInput2" placeholder="#">
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="modal-save" data-dismiss="modal">更新</button>
                  </div>
              </div>
          </div>
      </div>
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
<div class="row profile-events">
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
            <p>イベント名</p>
            <p>回答期限：9月5日02時20分</p>
            <p>開催場所: シクノイ</p>
            <p>開催日: 4月5日</p>
            <p>開始時間:　03時30分</p>
            <p>参加予定人数 2人/25人</p>
            詳細
            <p>やっっっっっっっっっっっっっっっっっばいぜええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええええ</p>
            <div class="row p-row">
              <div class="col-xs-6">
                <p>参加者</p>
                <div class="flickity-syncer">
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                </div>
              </div>
              <div class="col-xs-6">
                <p>興味あり</p>
                <div class="flickity-syncer">
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants" /></div>
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                  <div><img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" class="participants"/></div>
                </div>
              </div>
            </div>
            <div class="buttons">
            <button type="button" class="btn btn-primary">✨参加する</button>
            <button type="button" class="btn btn-primary">⭐️興味あり</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">閉じる</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
     
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
     
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
     
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-4 home_img padding0">
    <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
    <h5>イベント名<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="http://pilgrim-guild.com/wp-content/uploads/2016/11/baby-1151351_1920.jpg" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425" alt="baby-1151351_1920" />
          </div>
          <div class="modal-img_footer">
          <p></p>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
(function () {
// スライドコンテンツを後ほど操作するための配列 (グローバル変数)
var flickitySyncer = [];

// ページ内の[.flickity-syncer]のエレメントを取得する
var elms = document.getElementsByClassName( "flickity-syncer" ) ;

// [elms]全てに、ループ処理でFlickityを適用する
for( var i=0,l=elms.length; l>i; i++ )
{
  flickitySyncer[i] = new Flickity( elms[i] , {contain: true} ) ;
}
}());
$("#modal-save").click(function () {
    var input1 = $("#exampleInput1").val();
    var input2 = $("#exampleInput2").val();
});
</script>
@endsection
