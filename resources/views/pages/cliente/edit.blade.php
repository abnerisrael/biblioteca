@extends('layouts.app')
@section('header_title', 'Editar Cliente')
@section('page_title', 'Editar Cliente')
@section('page')
    <form method="POST" action="{{route('clientes.update', ['cliente'=>$cliente->id])}}">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$cliente->nome}}" placeholder="Nome">
            </div>
            <div class="form-group col-md-8">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$cliente->email}}" placeholder="Email">
            </div>
            <div class="form-group col-md-8">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{$cliente->cpf}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" id="btnGoBack" class="btn btn-outline-secondary">Voltar</button>
            </div>
        </div>
    </form>
@stop

@section('page_script')
<script>
    $('#btnGoBack').on('click', function () {
        history.back();
    })
</script>
@endsection
