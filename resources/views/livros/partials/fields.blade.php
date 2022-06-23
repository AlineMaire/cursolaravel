<ul>
  <li><a href="/livros/{{$livro->id}}">{{ $livro->titulo }}</a></li>
  <li>{{ $livro->autor }}</li>
  <li>{{ $livro->isbn }}</li>
  <li>Cadastrado por {{ $livro->user->name ?? '' }}</li>
  <li>Tipo: {{$livro->tipo}}</li>
  <li>Preço: {{$livro->preco}}</li>
  <li>Resumo: {{$livro->resumo}}</li>
    <br>
      <form action="/livros/{{ $livro->id }} " method="post">
      @csrf
      @method('delete')
      <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button> 
    </form>
</ul>
  