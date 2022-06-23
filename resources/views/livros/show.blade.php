@extends('main')

@section('content')

@include('livros.partials.fields')

@include('files.partials.form')
@foreach($livro->files as $file)
  <img src="/files/{{$file->id}}">
@endforeach

@endsection

