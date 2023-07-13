@extends('_layout.cork')
        
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Echosus userus listus</title>
    <head>
    <body>
        <h1>Welcomeus</h1>
        <ul>
            @foreach ($users as $user)
                <li> {{ $user->first_name }} , {{ $user->last_name}} </li>
            @endforeach
        <ul>
    <body>
<html>