@extends('layouts.app')
@section('header_title', 'Livro')
@section('page_title', 'Livro')
@section('page')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Oloco, meu!</strong> Olha esse alerta animado, como é chique!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Disponíveis</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Locados</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <table id="tb_livros_disponiveis" class="table table-striped table-bordered" style="width:100%">
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
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <table id="tb_livros_locados" class="table table-striped table-bordered" style="width:100%">
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
        </div>
    </div>

@stop

@section('page_scripts')
<script>
    $(document).ready(function() {
        $('#tb_livros_disponiveis').DataTable({
            paging: true
        });
    } );
    $(document).ready(function() {
        $('#tb_livros_locados').DataTable({
            paging: true
        });
    } );
</script>
@endsection
