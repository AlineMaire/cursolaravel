@section('javascripts_bottom')
@parent
<script type="text/javascript" src="{ { asset('js/livro.js') } }"></script>
@endsection

<p> Título: <input name="titulo" value="{{old('titulo', $livro->titulo)}}"> </p>
<p> Autor: <input name="autor" value="{{old('autor', $livro->autor)}}"> </p>
<p> ISBN: <input name="isbn" value="{{old('isbn', $livro->isbn)}}"> </p>
<p> Preço: <input name="preco" value="{{old('preco', $livro->preco)}}"> </p>
<p> Resumo: <textarea name="resumo"> {{old('resumo', $livro->resumo)}} </textarea> </p>

<select name="tipo">
    <option value="" selected=""> - Selecione  -</option>
    @foreach ($livro::tipos() as $tipo)
        @if( old('tipo') == '' )
        <option value="{{$tipo}}" {{ ( $livro->tipo == $tipo) ? 'selected' : ''}}>
            {{ $tipo }}
        </option>
        @else
        <option value="{{$tipo}}" {{ (old('tipo') == $tipo) ? 'selected' : ''}}>
            {{ $tipo }}
        </option>
        @endif
    @endforeach
</select>

<button type="submit">Atualizar e acrescentar arquivo de mídia</button>
