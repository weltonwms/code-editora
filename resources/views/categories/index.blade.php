@extends('layouts.app')
@section('content')

    <h4>Listagem de Categorias</h4>
    <a class="btn btn-primary" href="{{route('categories.create')}}">Nova Categoria</a>
<div class="row">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Acões</th>
        </tr>
        </thead>

        <tbody>
        @foreach($categorias as $categoria)
            <?php
                    $formulario="form-delete".$loop->index;
            ?>
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->name}}</td>
                <td>
                    <ul class="list-inline">
                        <li>
                            <a href="{{route('categories.edit',$categoria->id)}}">Editar</a>
                        </li>
                        <li>/</li>
                        <li>
                            <a href="{{route('categories.destroy',$categoria->id)}}"
                            onclick="event.preventDefault(); document.getElementById('{{$formulario}}').submit()">
                                Excluir</a>
                        </li>
                    </ul>

                    {!! Form::open(['route'=>['categories.destroy',$categoria->id],'method'=>'DELETE',
                        'class'=>'form-inline','style'=>'display:none', 'id'=>$formulario])!!}
                    {!! Form::submit('Excluir') !!}
                    {!! Form::close() !!}



                </td>
            </tr>


        @endforeach

        </tbody>
    </table>
    {!! $categorias->links() !!}
</div>

@endsection




