@extends('app')
@section('content')
    <section class="container-fluid panel panel-default">
        <div class="panel-title text-center">
            <h1 class="text-capitalize">Editar Categoria {{$category->name}}</h1>
        </div>

        <!-- Listar Erros -->
        <div class="panel-info">
            @if($errors->any)
                <ul class="alert">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="panel-body well">
            {!! Form::model($category,['route'=>['category.update',$category->id],'method'=>'put']) !!}
                @include('Category.form')
            {!! Form::close() !!}
        </div>

    </section>

@endsection