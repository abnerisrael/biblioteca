@extends('layouts.app')
@section('header_title', 'Cadastrar Livro')
@section('page_title', 'Cadastrar Livro')
@section('page')
    <form method="post" action="{{route('livros.store')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="form-group col-md-4">
                <label for="genero_id">Genero</label>
                <select id="genero_id" name="genero_id" class="form-control">
                    <option selected readonly>Selecione</option>
                    @foreach($generos as $genero)
                        <option value="{{$genero->id}}">{{$genero->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="editora_id">Editora</label>
                <select id="editora_id" name="editora_id" class="form-control">
                    <option selected readonly>Selecione</option>
                    @foreach($editoras as $editora)
                        <option value="{{$editora->id}}">{{$editora->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="reset" class="btn btn-secondary">Limpar Campos</button>
            </div>
        </div>
    </form>
@stop
