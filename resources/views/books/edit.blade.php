<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EditarLibro</title>
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <div>Editar Libro</div>
                    
                    <br>
                    
                    <div>
                        <form action="{{ route('books.update', $book->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="Telefono">Telefono:</label><br>
                                <input type="text" class="" name="Telefono" value="{{ $book->Telefono }}" />
                            </div>
                            <br>
                            <div>
                                <label for="Editorial">Editorial:</label><br>
                                <input type="text" class="" name="Editorial" value="{{ $book->Editorial }}" />
                            </div>
                            <br>
                            <div>
                                <label for="Isbn">Isbn:</label><br>
                                <input type="text" class="" name="Isbn" value="{{ $book->Isbn }}" />
                            </div>
                            <br>
                            <div>
                                <label for="Paginas">Paginas:</label><br>
                                <input type="text" class="" name="Paginas" value="{{ $book->Paginas }}" />
                            </div>
                            <br>
                            <button type="submit" class="">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>