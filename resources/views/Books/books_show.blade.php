@extends('_layout.cork')
        
@section('content')
<h1>{{$book->title}}</h1>
@foreach($book->picture as $picture)
<img src="{{ asset('assets/images/' . $book->picture[0]->name)}}.jpg", height="200px">
@endforeach
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
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center" scope="col">Корисник</th>
            <th class="text-center" scope="col">Изнајми</th>
        </tr>
        </thead>
        <tbody>
            @foreach($iznajmuvanja as $iznajmuvanje)
            <tr>
                <td class="text-center">
                    <span>{{$iznajmuvanje->first_name}} {{$iznajmuvanje->last_name}}</span>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                        <button>Изнајми</button>
                    </div>
                </td>
            </tr>
            @endforeach
                
        </body>
    </table>

@endsection