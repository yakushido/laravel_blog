<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body{
      background-color:rgba(201, 250, 250, 0.5);
    }
    .body{
      background-color: #fff;
    }
    h1{
      text-align: center;
      background-color: rgba(100, 100, 100, 0.4);
    }
    .content{
      border: 1px solid black;
    }
    h2{
      display: inline-block;
      border-bottom:2px solid black; 
    }

  </style>
</head>
<body>

  <header>
    <h1>ミニブログ</h1>
  </header>

  <main>
  {{-- @section('contents') --}}
    <div class="body">
      @foreach ($items as $item)
        <div class="content">
          <h2>{{$item->title}}</h2>
          <p>{{$item->body}}</p>
        </div>
      @endforeach
    </div>
  {{-- @endsection --}}
    {{-- @yield('contents') --}}
  </main>

  <footer>
    <a href="{{route('blog.management')}}">管理人ページ</a>
  </footer>
</body>
</html>