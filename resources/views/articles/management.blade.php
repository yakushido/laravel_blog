@extends('articles.index')

<h1>管理人ページ</h1>
<form method="post" action="{{route('blog.create')}}" >
  @csrf
    <input type="text" name="title"><br>
    <textarea name="body" id="" cols="70" rows="10"></textarea>
  <button>追加</button>
</form>

@foreach ($items as $item)
  <form method="post" action="{{route('blog.edit',$item->id)}}">
  @csrf
    <div class="content">
      <h2>{{$item->title}}</h2>
      <p>{{$item->body}}</p>
    </div> 
    <button>この記事を更新</button>
</form>
@endforeach

<a href="{{route('blog.index')}}">トップへ戻る</a>