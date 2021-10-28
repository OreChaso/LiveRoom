<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/storage/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/storage/css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('/storage/css/room.css') }}">
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="https://kit.fontawesome.com/fe2ae2a4f6.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <header>
    @include('auth.header')
  </header>
  <section>
    <div class="liveList">
        <li><iframe width="720" height="406" src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
        <div class="liveTitle">
          <p>RoomB</p>
          <button id="enter" class="btn btn-danger px-2 my-2">入室: 0</button>
          <button id="leave" class="btn btn-danger px-3 my-2">退室</button>
        </div>
    </div>
    <div class="reserveList">
      <div class="reserveList-title">
        <h2>予約一覧</h2>
        <p><?= date('m/d') ?></p>
      </div>
        <ul>
          @foreach($reserves as $reserve)    
            <li><p>{{ $reserve }}</p></li>
          @endforeach
        </ul>
      <div class="reserveList-title">
        <h2>予約フォーム</h2>
      </div>
      <form action="{{route('createReserveRoomB')}}" method="post" class="reserveForm">
        @csrf
        <ul>
          <li><p>日付</p><input type="date" name="reserved_at" required></li>
          <li><p>時間</p><input type="time" name="reserved_time" min="09:00" max="18:00" required></li>
          <li><input type="submit" value="予約" class="btn btn-danger px-3 my-4"></li>
        </ul>
      </form>
    </div>
  </section>
  <div class="sheet">
    <p>座席表</p>
    <img src="{{ asset('/storage/img/room_501.png')}}" alt="">
  </div>
</body>
<script>
  var enterButton = document.getElementById("enter"),
    enterCount = 0;
  enterButton.onclick = function() {
    enterCount += 1;
    enterButton.innerHTML = "入室: " + enterCount;
  };

  var leaveButton = document.getElementById("leave");
  leaveButton.onclick = function() {
    if(enterCount > 0) {
      enterCount -= 1;
      enterButton.innerHTML = "入室: " + enterCount;
    }
  };

</script>
</html>