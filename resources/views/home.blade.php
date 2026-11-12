@extends('layouts.fo')

@section('content')


    <img src="{{asset('images/photo-1623172959921-630212f71058.avif')}}" alt="">

    <h5>Funcionalidades da nossa app</h5>
    <ul>
        <li><a href="{{ route('welcome') }}">Welcome Page</a></li>
        <li><a href="{{ route('users.all') }}">Utilizadores</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizadores</a></li>
    </ul>

@endsection
