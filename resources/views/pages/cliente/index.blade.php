@extends('layouts.app')
@section('header_title', 'Cadastrar Livro')
@section('page_title', 'Cadastrar Livro')
@section('page')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Oloco, meu!</strong> Olha esse alerta animado, como é chique!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Genero</th>
            <th>Editora</th>
            <th>Data Cadastro</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
            <tr>
                <td>{{$livro->id}}</td>
                <td>{{$livro->nome}}</td>
                <td>{{$livro->genero_id}}</td>
                <td>{{$livro->editora_id}}</td>
                <td>{{$livro->created_at}}</td>
                <td>
                    <a role="button"
                        href="{{url('livros/'.$livro->id)}}"
                        class="btn btn-sm btn-outline-primary">Ver</a>
                    <button type="button" class="btn btn-sm btn-outline-warning">Editar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Excluir</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Locar</button>
                    <button type="button" class="btn btn-sm btn-outline-success">Devolver</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
