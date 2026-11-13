@extends('layouts.fo')

@section('content')
    <h1>Aqui vamos carregar todos os utilizadores</h1>

    <h6>Users sem estarem carregados da base de dados</h6>
    <ul>
        @foreach ($usersWDB as $user)
        <li>{{$user['name']}}-->{{$user['email']}}</li>
        @endforeach
    </ul>
@endsection
