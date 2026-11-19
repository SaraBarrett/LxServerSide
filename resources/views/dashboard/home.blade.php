@extends('layouts.fo')

@section('content')
    <h6>Olá {{ Auth::user()->name }}</h6>

    @if(Auth::user()->user_type == \App\Models\User::TYPE_ADMIN)
    <div class="alert alert-success">
        tens super poderes

    </div>


    @endif

@endsection
