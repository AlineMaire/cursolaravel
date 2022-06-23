@extends('main')

@section('content')
<h1>Editar cadastro de livros</h1>
<a href='/livros'>Voltar</a> <br>

<form method="POST" action="/livros/{{$livro->id}}">
    @csrf
    @method('PATCH')
    @include('livros.partials.form')

</form>
@endsection