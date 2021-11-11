<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/room.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="https://kit.fontawesome.com/fe2ae2a4f6.js" crossorigin="anonymous"></script>
  <title>LiveRoom</title>
</head>
<body>
  <header>
    @include('auth.header')
  </header>
  <section>
    <div class="liveList">
      <img src="{{ asset('/img/roomA.png') }}" alt="ホール">
        <div class="liveTitle">
          <p>RoomD</p>
          <button id="enter" class="btn btn-danger px-2 my-2">入室: 0</button><p>/36</p>
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
      <form action="{{route('createReserveRoomD')}}" method="post" class="reserveForm">
        @csrf
        <ul>
          <li><p>日付</p><input type="date" name="reserved_at" required></li>
          <li><p>時間</p><input type="time" name="reserved_time" step="900" value="09:00" min="09:00" max="18:00" required></li>
          <li><input type="submit" value="予約" class="btn btn-danger px-3 my-4"></li>
        </ul>
      </form>
    </div>
  </section>
  <div class="sheet">
    <p>座席表</p>
    <img src="{{ asset('/img/room_504.png')}}" alt="">
  </div>
  <footer>
    @include('auth.footer')
  </footer>
</body>
<script>
  var enterButton = document.getElementById("enter"),
    enterCount = 0;
  enterButton.onclick = function() {
    if(enterCount <= 35) {
    enterCount += 1;
    enterButton.innerHTML = "入室: " + enterCount;
    }
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