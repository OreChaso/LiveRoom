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
  <article class="roomForm">
    <form action="{{ route('newRoom') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Room Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Youtube URL</label>
        <input type="text" name="url" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">作成</button>
    </form>
  </article>
</main>
</body>