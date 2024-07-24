<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoría</title>
</head>
<body>
    <h1>Crear Categoría</h1>

    <form action="{{ route('Category.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" required>
        </label>
        <br>
        <label>
            Slug:
            <br>
            <input type="text" name="slug" required>
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>

