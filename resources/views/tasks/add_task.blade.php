@extends('layouts.fo')

@section('content')
    <h1>Adicionar tarefa</h1>
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input required type="text" name="name" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        @error('name')
            <p>Nome inválido</p>
        @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descrição
            </label>
            <input required type="text" name="description" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
