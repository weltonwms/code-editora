<div class="form-group {{$errors->has('title')?'has-error':''}} ">
    {!! Form::label('title','Título',['class'=>'control-label']) !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
    @if($errors->has('title'))
        <span class="help-block">{{$errors->first('title')}}</span>
    @endif
</div>

<div class="form-group {{$errors->has('subtitle')?'has-error':''}} ">
        {!! Form::label('subtitle','Subtítulo',['class'=>'control-label']) !!}
        {!! Form::text('subtitle',null,['class'=>'form-control']) !!}
        @if($errors->has('subtitle'))
                <span class="help-block">{{$errors->first('subtitle')}}</span>
        @endif
</div>

<div class="form-group {{$errors->has('price')?'has-error':''}} ">
        {!! Form::label('price','Preço',['class'=>'control-label']) !!}
        {!! Form::text('price',null,['class'=>'form-control']) !!}
        @if($errors->has('price'))
                <span class="help-block">{{$errors->first('price')}}</span>
        @endif
</div>

<div class="form-group">
    <?php
    $nome_submit = isset($book) ? 'Editar Livro' : 'Criar Livro';
    ?>
    {!! Form::submit($nome_submit,['class'=>'btn btn-primary']) !!}

</div>