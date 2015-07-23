@extends('app')
@section('content')
    <div class="panel panel-default ">
        <section class="panel-heading">
            <h1 class="panel-title text-capitalize">Lista de categorias</h1>
        </section>
        <section class="panel-body">
            <a href="{{ route('category.create') }}" class="btn btn-lg btn-default">nova categoria</a>
            <table class="table  table-striped table-hover">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    <tr>
                        <td> 1</td>
                        <td> nome 1</td>
                        <td> descrição 1</td>
                        <td> editar | excluir</td>
                    </tr>
                    <tr>
                        <td> 2</td>
                        <td> nome 2</td>
                        <td> descrição 2</td>
                        <td> editar | excluir</td>
                    </tr>
                    <tr>
                        <td> 3</td>
                        <td> nome 3</td>
                        <td> descrição 3</td>
                        <td> editar | excluir</td>
                    </tr>
                </tbody>

            </table>
        </section>
    </div>
@endsection