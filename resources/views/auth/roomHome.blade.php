<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
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
    <div class="hero">
      <h2>
        簡単予約<br>
        <b>Live</b>Room
      </h2>
      <h1><img src="{{ asset('/img/HowToLiveRoom.png')}}" alt="LiveRoom"></h1>
    </div>
  </section>
  <article>
    <div class="d-flex justify-content-between roomTitle">
      <h2>Room一覧</h2>
      <a href="{{ route('roomForm') }}">新しい部屋を作成</a>
    </div>
    <p>＊以下のRoomはサンプルです</p>
    <div class="rooms samples">
      <ul class="row justify-content-around">
        <li class="col-5 mt-4"><a href="/rooms/RoomA">RoomA</a></li>
        <li class="col-5 mt-4"><a href="/rooms/RoomB">RoomB</a></li>
        <li class="col-5 mt-4"><a href="/rooms/RoomC">RoomC</a></li>
        <li class="col-5 mt-4"><a href="/rooms/RoomD">RoomD</a></li>
      </ul>
    </div>
    <div class="rooms mt-4">
      <p>＊新しい部屋の追加・削除のデモンストレーションです。<br>
        予約機能を体験したい方は上記のサンプルルームでお願いします。
      </p>
      <ul class="row justify-content-around">
        @if(isset($reserves))
        @foreach($reserves as $reserve)    
        <li class="col-5 mt-4"><a>{{ $reserve }}</a></li>
        @endforeach
        @endif
      </ul>
    </div>
  </article>
  <footer>
    @include('auth.footer')
  </footer>
</html>