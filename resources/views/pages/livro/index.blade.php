@extends('layouts.app')
@section('header_title', 'Livro')
@section('page_title', 'Livro')
@section('page')
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
                @foreach($livros_disponiveis as $livro)
                    <tr>
                        <td>{{$livro->id}}</td>
                        <td>{{$livro->nome}}</td>
                        <td>{{\App\Genero::find($livro->genero_id)->nome}}</td>
                        <td>{{\App\Editora::find($livro->editora_id)->nome}}</td>
                        <td>{{$livro->created_at}}</td>
                        <td>
                            <a role="button"
                               href="{{url('livros/'.$livro->id)}}"
                               class="btn btn-sm btn-outline-primary">Ver</a>
                            <a role="button"
                               href="{{url('livros/'.$livro->id.'/edit')}}"
                               class="btn btn-sm btn-outline-warning">Editar</a>
                            <a role="button"
                               href="{{url('livros/'.$livro->id.'/rent')}}"
                               class="btn btn-sm btn-outline-secondary">Locar</a>
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
                    <th>Alugado para</th>
                    <th>Data Aluguel</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($livros_alugados as $livro)
                    <tr>
                        <td>{{$livro->id}}</td>
                        <td>{{$livro->nome}}</td>
                        <td>{{\App\Genero::find($livro->genero_id)->nome}}</td>
                        <td>{{\App\Editora::find($livro->editora_id)->nome}}</td>
                        <td>{{\App\Cliente::find($livro->cliente_id)->nome}}</td>
                        <td>{{$livro->updated_at}}</td>
                        <td>
                            <a role="button"
                               href="{{url('livros/'.$livro->id)}}"
                               class="btn btn-sm btn-outline-primary">Ver</a>
                            <a role="button"
                               href="{{url('livros/'.$livro->id.'/edit')}}"
                               class="btn btn-sm btn-outline-warning">Editar</a>
                            <a role="button"
                               href="{{url('livros/'.$livro->id.'/giveback')}}"
                               class="btn btn-sm btn-outline-success">Devolver</a>
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
