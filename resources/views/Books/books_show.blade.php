@extends('_layout.cork')
        
@section('content')
<h1>{{$book->title}}</h1>
<h2>{{$book->barcode}}</h2>
<h2>Број на страни:{{$book->pages}}</h2>
@if (count($book->author)==1)
    <h2>Автор: <a href="{{ route('avtor.prikazi',['authorId' => $book->author[0]->id]) }}"> {{ $book->author[0]->name }}</a></h2>
@else
    <ul>
    @foreach($book->author as $author)
    <li><a href="{{ route('avtor.prikazi',['authorId' => $author->id]) }}"> $author->name </a> </li>
    @endforeach
    <ul>
@endif
<a href="{{ route('kniga.lista') }}">Назад до сите книги</a>
@endsection