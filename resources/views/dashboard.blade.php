<x-app-layout>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                <div>
                    <h1 style="font-size: 2em;">Lista de Livros</h1>
                </div>

                    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Adicionar Livro</a>
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Autor</th>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>Edição</th>
                                <th>Editora</th>
                                <th>Ano de Publicação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->subtitle }}</td>
                                    <td>{{ $book->edition }}</td>
                                    <td>{{ $book->publisher }}</td>
                                    <td>{{ $book->publication_year }}</td>
                                    <td>
                                        <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este livro?')">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $books->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
