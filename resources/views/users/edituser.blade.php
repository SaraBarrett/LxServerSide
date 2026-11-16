@extends('layouts.fo')

@section('content')
    <h6>Detalhes do user {{ $userInfo->name }}</h6>
    <p>{{ $userInfo->email }}</p>
    <p>{{ $userInfo->address }}</p>
    <p>{{ $userInfo->nif }}</p>
@endsection
