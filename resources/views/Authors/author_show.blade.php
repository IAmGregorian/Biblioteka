@extends('_layout.cork')
        
@section('content')
<h1> Книги на авторот {{ $author->name }} </h1>
<h2> Бигорафија на авторот: {{ $author->biography }} </h2>
@if (count($author->book)==1)
  <h2>Книга: {{ $author->books[0]->title }}</h2>
@else
  <ul>
    @foreach($author->book as $book)
      <li>Книга: <a href=" {{ route('kniga.prikazi',['bookId' => $book->id]) }} "> {{ $book->title }} </a></li>
    @endforeach
  </ul>
@endif
<a href=" {{ route('avtor.lista') }} "> Назад до листата на автори </a>