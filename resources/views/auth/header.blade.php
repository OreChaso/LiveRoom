
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ asset('/img/logo.png')}}" alt="LiveRoom"></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="Navber">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('home') }}">Home <span class="sr-only">(現位置)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rooms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="/rooms/RoomA" class="dropdown-item">RoomA</a>
          <a href="/rooms/RoomB" class="dropdown-item">RoomB</a>
          <a href="/rooms/RoomC" class="dropdown-item">RoomC</a>
          <a href="/rooms/RoomD" class="dropdown-item">RoomD</a>
        </div>
      </li>
    </ul>
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <input type="submit" class="btn btn-danger" value="Logout">
    </form>
  </div>
  </div>
</nav>