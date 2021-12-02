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
  <style>body{background-color: tomato;}</style>
  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="https://kit.fontawesome.com/fe2ae2a4f6.js" crossorigin="anonymous"></script>
  <title>LiveRoom</title>
</head>
<body>
  <main>
  <header>
    @include('admin.header')
  </header>
  <article>
    <div class="d-flex justify-content-between roomTitle">
      <h2>Room一覧</h2>
    </div>
    <p>＊以下のRoomはサンプルです</p>
    <div class="rooms samples">
      <ul class="row justify-content-around">
        <li class="col-5 mt-4"><a href="{{ route('adminShowRoomA') }}">RoomA</a></li>
        <li class="col-5 mt-4"><a href="{{ route('adminShowRoomB') }}">RoomB</a></li>
        <li class="col-5 mt-4"><a href="{{ route('adminShowRoomC') }}">RoomC</a></li>
        <li class="col-5 mt-4"><a href="{{ route('adminShowRoomD') }}">RoomD</a></li>
      </ul>
    </div>
    <div class="rooms mt-4">
      <p>＊新しく作成された部屋が表示されます。<br>
        予約機能を体験したい方は上記のサンプルルームでお願いします。
      </p>
      <ul class="row justify-content-around">
        {{-- @if(isset($reserves)) --}}
        @foreach($reserves as $reserve)    
        <li class="col-5 mt-4"><a>{{ $reserve }}</a></li>
        @endforeach
        {{-- @endif --}}
      </ul>
    </div>
  </article>
  <footer>
    @include('admin.footer')
  </footer>
  </main>
</html>