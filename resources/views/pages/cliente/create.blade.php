@extends('layouts.app')
@section('header_title', 'Cadastrar Cliente')
@section('page_title', 'Cadastrar Cliente')
@section('page')
    <form method="post" action="{{route('clientes.store')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="form-group col-md-8">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-8">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" >
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
