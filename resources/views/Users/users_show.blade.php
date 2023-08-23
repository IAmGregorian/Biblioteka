@extends('_layout.cork')
        
@section('content')
<h1>{{$user->first_name}} {{$user->last_name}}</h1>
<h2>E-mail:{{$user->email}}</h2>
<h2>Телефон:{{$user->broj}}</h2>
<table>
  <tr> 
    <td>tuja treba da stoiv iznajmeni knjige :) </td>
  </tr>
</table>
<a href="{{ route('korisnik.lista') }}">Назад до сите корисници</a>
@endsection