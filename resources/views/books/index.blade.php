@extends('layouts.app')
@section('content')

    <h4>Listagem de Livros</h4>
    <a class="btn btn-primary" href="{{route('books.create')}}">Novo Livro</a>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Preço</th>
                <th>Acões</th>
            </tr>
            </thead>

            <tbody>
            @foreach($books as $book)
                <?php
                $formulario="form-delete".$loop->index;
                ?>
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->subtitle}}</td>
                    <td>{{$book->price}}</td>
                    <td>
                        <ul class="list-inline">
                            <li>
                                <a href="{{route('books.edit',$book->id)}}">Editar</a>
                            </li>
                            <li>/</li>
                            <li>
                                <a href="{{route('books.destroy',$book->id)}}"
                                   onclick="event.preventDefault(); document.getElementById('{{$formulario}}').submit()">
                                    Excluir</a>
                            </li>
                        </ul>

                        {!! Form::open(['route'=>['books.destroy',$book->id],'method'=>'DELETE',
                            'class'=>'form-inline','style'=>'display:none', 'id'=>$formulario])!!}
                        {!! Form::submit('Excluir') !!}
                        {!! Form::close() !!}



                    </td>
                </tr>


            @endforeach

            </tbody>
        </table>
        {!! $books->links() !!}
    </div>

@endsection




