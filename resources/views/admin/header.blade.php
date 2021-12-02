
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('admin.home') }}"><img src="{{ asset('/img/logo.png')}}" alt="LiveRoom"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="Navber">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('admin.home') }}">Home <span class="sr-only">(現位置)</span></a>
        </li>
        <li class="nav-item">
          <a href="{{ route('roomForm') }}">New</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Rooms
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('adminShowRoomA') }}" class="dropdown-item">RoomA</a>
            <a href="{{ route('adminShowRoomB') }}" class="dropdown-item">RoomB</a>
            <a href="{{ route('adminShowRoomC') }}" class="dropdown-item">RoomC</a>
            <a href="{{ route('adminShowRoomD') }}" class="dropdown-item">RoomD</a>
          </div>
        </li>
      </ul>
      <form class="d-flex" action="{{ route('admin.logout') }}" method="post">
        @csrf
        <input type="submit" class="form-control me-2 btn btn-danger" value="Logout">
      </form>
    </div>
  </div>
</nav>
