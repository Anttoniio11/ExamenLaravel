<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <div>Libros</div>
                    <br>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Telefono</th>
                                    <th>Editorial</th>
                                    <th>Isbn</th>
                                    <th>Paginas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->Telefono }}</td>
                                    <td>{{ $book->Editorial }}</td>
                                    <td>{{ $book->Isbn }}</td>
                                    <td>{{ $book->Paginas }}</td>
                                    <td>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                            <a href="{{ route('books.show', $book->id) }}" class="">Ver</a>
                                            <a href="{{ route('books.edit', $book->id) }}" class="">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <a href="{{ route('books.create') }}" class="">Crear Nuevo Libro</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>