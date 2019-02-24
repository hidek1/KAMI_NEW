@extends('layout')
@section('css')
<style>
#form2{
position:relative;
max-width:800px;  
margin-bottom:20px;
}
#sbox2{
height:50px;
padding:0 10px; 
/*position:absolute; */
left:0;
top:0; 
border-radius:2px;
outline:0;
background:#eee;  
}
#sbtn2{
height:50px;
position:absolute; 
right: 20px;
top:0;
background:none;
color:#666;
border:none;
font-size:20px;/*アイコンサイズ*/
}
#sbtn5:hover{
color:#7fbfff;
}
.home_title {
  padding-top: 50px;
}
.padding0{
  padding: 0;
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
.modal_explain{
  padding-left: 1rem;
  padding-right: 1rem;
}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/flickity.min.css')}}">
<script type="text/javascript" src="{{asset('js/flickity.pkgd.min.js')}}"></script>
@endsection

@section('content')

<div class="row">
  <div class="col-xs-12 col-md-6 col-md-offset-3">
  <h4>イベントを検索</h4>
  <form id="form2" action="自分のサイトURL" method="get" style="width: 100%">
    <input id="sbox2"  id="s" name="s" type="text" style="width: 100%;" placeholder="フリーワードを入力"/>
    <button type="submit" id="sbtn2"><i class="fas fa-search"></i></button>
  </form>
  </div>
</div>
<h4 class="home_title">検索結果</h4>
<div class="row">
    <!--
     +"event_id": 1
    +"organizer_id": 1
    +"event_name": "zNaDs9nAFm"
    +"start": "2022-01-01 12:10:42"
    +"event_place": "mwAcBbCdmS"
    +"event_pic": "images/ERxM8s8f.jpg"
    +"meet_time": "2018-12-01 12:10:42"
    +"meet_place": "7g6FNLpti5"
    +"answer_limit": "2022-01-01 12:10:42"
    +"event_created": "2018-12-01 12:10:42"
    +"event_modified": "2019-02-23 15:15:36"
    +"detail_id": 1
    +"max": 200
    +"min": 100
    +"invite": "nYiKnXU7"
    +"detail": "GqwXf5G9PDdiD67KLNqI"
    +"price": 1980
    +"graduation_fl": 0
    +"teachers_fl": 0
    +"detail_modified": "2018-12-01 12:10:42" -->
  @for ($i = 0; $i < count($events); $i++)
  <div class="col-xs-6 col-md-4 home_img padding0">
    <img src="{{ $events[$i]->event_pic }}" alt="baby-1151351_1920" width="1920" height="1440" class="img-responsive thumbnail　aligncenter size-full wp-image-425" data-toggle="modal" data-target="#{{ $i }}" style="cursor:pointer" />
    <h5>{{ $events[$i ]->event_name }}<span class="pull-right">4/5 18:00〜</span></h5>
    <div class="modal fade" id="{{ $i}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg modal-middle">
        <div class="modal-content">
          <div class="modal-body">
          <img src="{{ $events[$i]->event_pic }}" alt="baby-1151351_1920" width="100%" class="aligncenter size-full wp-image-425"/>
          </div>
          <div class="modal-img_footer">
            <div class="modal_explain">
              <p>{{ $events[$i]->event_name }}</p>
              <p>回答期限: {{ date('m月d日 H時i分',  strtotime($events[$i]->answer_limit)) }}</p>
              <p>開催場所: {{ $events[$i]->event_place }}</p>
              <p>開催日: {{ date('m月d日',  strtotime($events[$i]->start)) }}</p>
              <p>開始時間: {{ date('H時i分',  strtotime($events[$i]->start)) }}</p>
              <p>参加予定人数: 2人/{{ $events[$i]->max }}人</p>
              詳細
              <p>{{ $events[$i]->detail }}</p>
            </div>
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
  @endfor
  <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
    <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
    <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
  <div class="col-xs-6 col-md-4 home_img padding0">
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
</script>
@endsection