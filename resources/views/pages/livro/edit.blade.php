@extends('layouts.app')
@section('header_title', 'Editar Livro')
@section('page_title', 'Editar Livro')
@section('page')
    <form method="POST" action="{{route('livros.update', ['livro'=>$livro->id])}}">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$livro->nome}}" placeholder="Nome">
            </div>
            <div class="form-group col-md-4">
                <label for="genero_id">Genero</label>
                <select id="genero_id" name="genero_id" class="form-control">
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
                <select id="editora_id" name="editora_id" class="form-control">
                    <option readonly>Selecione</option>
                    @foreach(\App\Editora::all() as $editora)
                        <option value="{{$editora->id}}" @if($livro->editora_id == $editora->id) selected @endif>
                            {{$editora->nome}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
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
