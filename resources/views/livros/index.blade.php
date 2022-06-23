@extends('main')

@section('content')

<form method="get" action="/livros">
<div class="row">
    <div class=" col-sm input-group">
    <input type="text" class="form-control" name="search" value="{{ request()->search }}">

    <span class="input-group-btn">
        <button type="submit" class="btn btn-success"> Buscar </button>
    </span>

    </div>
</div>
</form>

{{ $livros->appends(request()->query())->links() }}

<a href="livros/create">Cadastre um novo livro</a>
<br>
<br>

<li> Lista de livros cadastrados  no sistema: <br><br>

@foreach ($livros as $livro)
Título: <a href="livros/{{$livro->id}}"> {{$livro->titulo}} </a> <br>
Autor: {{$livro->autor}} <br>
ISBN: {{$livro->isbn}} <br> 
Preço: {{$livro->preco}} <br>
Resumo: {{$livro->resumo}} <br>
Tipo: {{$livro->tipo}}<br>
Cadastrado por: {{ $livro->user->name ?? '' }}<br>

<form method="POST" action="livros/{{$livro->id}}/edit">
   @csrf
    @method('get')
   <button type="submit"> Editar </a>
</form>

<form method="POST" action="livros/{{$livro->id}}">
    @csrf
    @method('delete')
    <button type="submit" onclick="return confirm('Tem certeza?');">Deletar</button> 
</form>

<br>
<br>
<br>

@endforeach
@endsection