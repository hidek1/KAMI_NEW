<nav class="navbar navbar-color  navbar-fixed-top">
{{--   <div class="container"> --}}
    <div class="navbar-header">
      <button type="button" class="navbar-toggle nav-button" data-toggle="collapse" data-target="#gnavi"">
        <span class="sr-only">メニュー</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#"><img height="100px" style="margin-left: 15px;" src="{{asset('images/logo1.png')}}" alt=""></a>
    </div>

    <div id="gnavi" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" style="margin-right: 30px;">
        <li><a  class="nav-text  nav-text-height" href="/index">ホーム</a></li>
        <li><a  class="nav-text  nav-text-height" href="/event_list">イベント一覧</a></li>
        <li><a  class="nav-text  nav-text-height" href="/event_new">イベント作成</a></li>
        <li><a  class="nav-text  nav-text-height" href="/profile">マイページ</a></li>
        <li><a  class="nav-text  nav-text-height" href="">ログアウト</a></li>
      </ul>
    </div>
{{--   </div> --}}
</nav>