<div class="form-group {{$errors->has('name')?'has-error':''}} ">
    {!! Form::label('name','Nome',['class'=>'control-label']) !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
    @if($errors->has('name'))
        <span class="help-block">{{$errors->first('name')}}</span>
    @endif
</div>

<div class="form-group">
    <?php
    $nome_submit = isset($category) ? 'Editar Categoria' : 'Criar Categoria';
    ?>
    {!! Form::submit($nome_submit,['class'=>'btn btn-primary']) !!}

</div>