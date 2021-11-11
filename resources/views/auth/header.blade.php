
<div class="header-inner">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1><a href="/roomHome" class="navbar-brand"><img src="{{ asset('/img/logo.png')}}" alt="LiveRoom"></a></h1>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Navber">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/roomHome">ホーム <span class="sr-only">(現位置)</span></a>
        </li>
        <li class="nav-item">
          <a href="{{ route('roomForm') }}">新しい部屋を作成</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Room一覧
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="/rooms/RoomA" class="dropdown-item">RoomA</a>
            <a href="/rooms/RoomB" class="dropdown-item">RoomB</a>
            <a href="/rooms/RoomC" class="dropdown-item">RoomC</a>
            <a href="/rooms/RoomD" class="dropdown-item">RoomD</a>
          </div>
        </li>
    </div><!-- /.navbar-collapse -->
  </nav>
</div>