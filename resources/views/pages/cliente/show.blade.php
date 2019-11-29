@extends('layouts.app')
@section('header_title', 'Ver Cliente')
@section('page_title', 'Ver Cliente')
@section('page')
    <form method="POST" action="{{route('clientes.destroy', ['cliente'=>$cliente->id])}}">
        @method('DELETE')
        @csrf
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$cliente->nome}}" placeholder="Nome" disabled>
                </div>
                <div class="form-group col-md-5">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$cliente->email}}" placeholder="Nome" disabled>
                </div>
                <div class="form-group col-md-2">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{$cliente->cpf}}" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a role="button"href="{{route('clientes.edit',['cliente'=>$cliente->id])}}" class="btn btn-warning">Editar</a>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </form>
@stop
