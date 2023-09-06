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
            <form method="POST" action="{{route('iznajmuvanje')}}" name="rentForm" id="rentForm">
                @csrf
                <input type="hidden" name="bookId" value="{{ $book->id }}">
            @foreach($users as $user)
            <tr>
                <td class="text-center">
                    <span>{{$user->first_name}} {{$user->last_name}}</span>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                        <button type="submit" name="userId" value="{{$user->id}}">Изнајми</button>
                    </div>
                </td>
            </tr>
            @endforeach
            </form>
        </body>
    </table>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center" scope="col">Корисник</th>
            <th class="text-center" scope="col">Изнајмена</th>
            <th class="text-center" scope="col">Вратена</th>
        </tr>
        </thead>
        <tbody>
            <form method="POST" action="{{route('vrakjanje')}}" name="rentForm" id="rentForm">
                @csrf
            @foreach($iznajmuvanja as $iznajmuvanje)
            <tr>
                <td class="text-center">
                    <span>{{$iznajmuvanje->first_name}} {{$iznajmuvanje->last_name}}</span>
                </td>
                <td class="text-center">
                    <span>{{$iznajmuvanje->rented_at}} </span>
                </td>
                <td class="text-center">
                    <div class="action-btns">
                        @if($iznajmuvanje->returned_at==null)
                        <button type="submit" name="rentId" value="{{$iznajmuvanje->id}}">Врати</button>
                        @else
                        <span>{{$iznajmuvanje->returned_at}}</span>
                        @endif
                    </div>
                </td>
            </tr>
            @endforeach
            </form>
        </body>
    </table>
@endsection