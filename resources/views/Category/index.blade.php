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
                    @foreach($categories as $category)
                        <tr>
                            <td> {{ $category->id }} </td>
                            <td> {{ $category->name }} </td>
                            <td> {{ $category->description }}</td>
                            <td>
                                <a href="{{ route('category.edit',['id'=>$category->id]) }}"> Editar</a> |
                                <a href="{{ route('category.delete',['id'=>$category->id]) }}">Excluir</a>
                            <td>
                        </tr>
                    @endforeach()
                </tbody>
            </table>
            <div class="text-center">
                {!! $categories->render() !!}
            </div>
        </section>
    </div>
@endsection