    <div class="form-group-lg">
        {!! Form::label('name','Nome:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group-lgS">
        {!! Form::label('description','Descrição:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group-lg">
        {!! Form::submit('Salvar',['class'=>'btn btn-lg btn-primary']) !!}
        <a href="{{ route('category') }}" class="btn btn-lg btn-default">Voltar</a>
    </div>
