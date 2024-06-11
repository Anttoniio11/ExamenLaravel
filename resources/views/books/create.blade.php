<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CrearLibro</title>
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <div>Crear Libro</div> <br>
    
                    <div>
                        <form action="{{ route('books.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="Telefono">Telefono:</label> <br>
                                <input type="text" class="" name="Telefono" />
                            </div>
                            <br>
                            <div>
                                <label for="Editorial">Editorial:</label> <br>
                                <input type="text" class="" name="Editorial" />
                            </div>
                            <br>
                            <div>
                                <label for="Isbn">Isbn:</label><br>
                                <input type="text" class="" name="Isbn" />
                            </div>
                            <br>
                            <div>
                                <label for="Paginas">Paginas:</label><br>
                                <input type="text" class="" name="Paginas" />
                            </div>
                            <br>
                            <button type="submit" class="">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>