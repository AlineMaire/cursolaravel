<form method="post" enctype="multipart/form-data" action="files">
  @csrf
  <input type="hidden" name="livro_id" value="{{ $livro->id }}">
  <input type="file" name="file">
  <button type="submit" class="btn btn-success"> Enviar </button>
</form>