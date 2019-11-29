@extends('layouts.app')
@section('header_title', 'Clientes')
@section('page_title', 'Clientes')
@section('page')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data Cadastro</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->created_at}}</td>
                <td>
                    <a role="button"
                       href="{{url('clientes/'.$cliente->id)}}"
                       class="btn btn-sm btn-outline-primary">Ver</a>
                    <a role="button"
                       href="{{url('clientes/'.$cliente->id.'/edit')}}"
                       class="btn btn-sm btn-outline-warning">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('page_scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                paging: true
            });
        } );
    </script>
@endsection
