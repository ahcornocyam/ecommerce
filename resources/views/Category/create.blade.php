@extends('app')
@section('content')
    @if($errors->any)
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>['category.store'],'method'=>'post']) !!}
@endsection