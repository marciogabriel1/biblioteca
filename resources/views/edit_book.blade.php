<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/book.css">
</head>
<div class="container mt-5">
    <h2>Editar Livro</h2>
    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="author">Autor:</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="subtitle">Subtítulo:</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $book->subtitle }}">
        </div>
        <div class="form-group">
            <label for="edition">Edição:</label>
            <input type="text" class="form-control" id="edition" name="edition" value="{{ $book->edition }}">
        </div>
        <div class="form-group">
            <label for="publisher">Editora:</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
        </div>
        <div class="form-group">
            <label for="publication_year">Ano de Publicação:</label>
            <input type="number" class="form-control" id="publication_year" name="publication_year" value="{{ $book->publication_year }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
</body>
</html>
