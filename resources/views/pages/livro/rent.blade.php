@extends('layouts.app')
@section('header_title', 'Alugar Livro')
@section('page_title', 'Alugar Livro')
@section('page')
    <form method="POST" action="{{route('livros.update', ['livro'=>$livro->id])}}">
        @method('PUT')
        @csrf
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$livro->nome}}" placeholder="Nome" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="genero_id">Genero</label>
                    <select id="genero_id" name="genero_id" class="form-control" disabled>
                        <option selected readonly>Selecione</option>
                        @foreach(\App\Genero::all() as $genero)
                            <option value="{{$genero->id}}" @if($livro->genero_id == $genero->id) selected @endif>
                                {{$genero->nome}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="editora_id">Editora</label>
                    <select id="editora_id" name="editora_id" class="form-control" disabled>
                        <option readonly>Selecione</option>
                        @foreach(\App\Editora::all() as $editora)
                            <option value="{{$editora->id}}" @if($livro->editora_id == $editora->id) selected @endif>
                                {{$editora->nome}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="cliente_id">Alugar para:</label>
                    <select id="cliente_id" name="cliente_id" class="form-control" required>
                        <option readonly>Selecione</option>
                        @foreach(\App\Cliente::all() as $cliente)
                            <option value="{{$cliente->id}}">
                                {{$cliente->nome}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Alugar</button>
                </div>
            </div>
        </form>
@stop
