<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bibliotekus</title>
    <head>
    <body>
        <h1>Welcomeus to bibliotekus</h1>
        <ul>
            @foreach($knigi as $kniga)
            <li><a href="http://localhost/biblioteka/public/book/{{$kniga->id">{{ $kniga->title }}</a></li>
            @endforeach
            </ul>

        <ul>
            @foreach(@knigi as $kniga)
            <li><a href="{{ route('kniga.prikazi',['bookId' => $kniga->id }}">{{ $kniga->title }}</a></li>
        </ul>
    <body>
<html>