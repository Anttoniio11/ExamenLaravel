<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VerLibro</title>
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <div>Libro</div>
                    
                    <div>
                        <table>
                            <tr>
                                <th>ID</th>
                                <td>{{ $book->id }}</td>
                            </tr>
                            <tr>
                                <th>Telefono</th>
                                <td>{{ $book->Telefono }}</td>
                            </tr>
                            <tr>
                                <th>Editorial</th>
                                <td>{{ $book->Editorial }}</td>
                            </tr>
                            <tr>
                                <th>Isbn</th>
                                <td>{{ $book->Isbn }}</td>
                            </tr>
                            <tr>
                                <th>Paginas</th>
                                <td>{{ $book->Paginas }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>