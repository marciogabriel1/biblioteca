<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Lista de Livros</h2>
                    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Adicionar Livro</a>
                    <table class="table table-bordered">
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
                                        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Editar</a>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
