@extends('app')
    @section('content')
        <section class="panel panel-default">
            <div class="panel-heading text-center">
                <h1 class="text-capitalize">Criar Categoria</h1>
            </div>

            <!-- Listar Erros -->
            @if($errors->any)
                <div class="panel-info">
                    <ul class="alert">
                       @foreach($errors->all() as $error)
                           <li>{{$error}}</li>
                       @endforeach
                    </ul>
                </div>
            @endif

            <div class="panel-body well">
                {!! Form::open(['route'=>['category.store'],'method'=>'post']) !!}
                    @include('Category.form')
                {!! Form::close() !!}
            </div>

        </section>

    @endsection