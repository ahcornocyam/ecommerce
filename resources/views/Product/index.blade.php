@extends('app')
    @section('content')
        <div class="panel panel-default">
            <section class="panel-heading">
                <h1 class="panel-title text-capitalize"> Lista de Produtos</h1>
            </section>
            <section class="panel-body">
                <a href="{{ route('product.create') }}" class="btn btn-lg btn-default">Novo Produto</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>PREÇO</th>
                        <th>DESTAQUE</th>
                        <th>RECOMENDADO</th>
                        <th>CATEGORIA</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>produto 1</td>
                            <td>R$: 10,00</td>
                            <td>sim</td>
                            <td>sim</td>
                            <td>categoria 1</td>
                            <td>
                                <a href="">Editar</a> |
                                <a href="">Excluir</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>produto 2</td>
                            <td>R$: 10,00</td>
                            <td>sim</td>
                            <td>não</td>
                            <td>categoria 2</td>
                            <td>
                                <a href="">Editar</a> |
                                <a href="">Excluir</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    @endsection