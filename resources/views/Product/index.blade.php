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
                        <th>DESCRIÇÃO</th>
                        <th>PREÇO</th>
                        <th>DESTAQUE</th>
                        <th>RECOMENDADO</th>
                        <th>CATEGORIA</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td> {{ $product->id }} </td>
                            <td> {{ $product->name }} </td>
                            <td> {{ $product->description }} </td>
                            <td> R$: {{ $product->price }} </td>
                            <td> {{ ($product->featured)? 'sim' : 'não' }} </td>
                            <td> {{ ($product->recommend)? 'sim' : 'não' }} </td>
                            <td> {{ $product->category->name }} </td>
                            <td>
                                <a href="{{ route('images',['id'=>$product->id]) }}">Images</a> |
                                <a href="{{ route('product.edit',['id'=>$product->id]) }}">Editar</a> |
                                <a href="{{ route('product.delete',['id'=>$product->id]) }}">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {!! $products->render() !!}
                </div>
            </section>
        </div>
    @endsection