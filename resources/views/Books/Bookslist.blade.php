<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Echosus listus</title>
    <head>
    <body>
        <h1>Welcomeus to bookus listus</h1>
        <ul>
            @foreach ($books as $book)
                <li><a href="{{ route('kniga.prikazi',['bookId' => $book->id]) }}"> {{ $book->title }} </a> has {{ $book->pages }} pages, with barcode {{ $book->barcode }}  </li>
            @endforeach
        <ul>
    <body>
<html>