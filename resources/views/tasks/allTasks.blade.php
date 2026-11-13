@extends('layouts.fo')

@section('content')
    <h6>Tarefas da base de dados</h6>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Estado</th>
                <th scope="col">Data de conclusão</th>
                <th scope="col">Utilizador</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->due_at }}</td>
                    <td>{{ $task->user_name }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
