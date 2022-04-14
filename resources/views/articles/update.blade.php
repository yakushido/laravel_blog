@extends('articles.index')

<h1>更新ページ</h1>

<form action="">
  @csrf
  @foreach($items as $item)
  <input type="text" name="updateTitle" value="{{$item->title}}"><br>
  <textarea name="updateBody" id="" cols="70" rows="10">{{$item->body}}</textarea>
  <button>更新</button>
  @endforeach
</form>

<a href="{{route('blog.management')}}">管理人ページへ</a>