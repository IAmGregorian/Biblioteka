<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Echosus authorus listus</title>
    <head>
    <body>
        <h1>Welcomeus to authorus listus</h1>
        <ul>
            @foreach ($authors as $author)
              <li> <a href="{{ route('avtor.prikazi',['authorId' => $author->id]) }}"> {{ $author->name }} </a> </li>
            @endforeach
        <ul>
    <body>
<html>