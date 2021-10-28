{{-- <div class="header-inner">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <h1><a href="/roomHome" class="navbar-brand"><img src="{{ asset('/storage/img/logo.png')}}" alt="LiveRoom"></a></h1>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="Navber">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="/roomHome" class="nav-link active" aria-current="page">ホーム</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Room一覧
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a href="/rooms/RoomA" class="dropdown-item">RoomA</a>
              </li>
              <li>
                <a href="/rooms/RoomB" class="dropdown-item">RoomB</a>
              </li>
              <li>
                <a href="/rooms/RoomC" class="dropdown-item">RoomC</a>
              </li>
              <li>
                <a href="/rooms/RoomD" class="dropdown-item">RoomD</a>
              </li>
            </ul>
          </li>
        </ul>
    </div>
  </nav>
</div> --}}




<div class="header-inner">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1><a href="/roomHome" class="navbar-brand"><img src="{{ asset('/storage/img/logo.png')}}" alt="LiveRoom"></a></h1>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Navber">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/roomHome">ホーム <span class="sr-only">(現位置)</span></a>
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