<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
</head>
<body>
    <h1>Editar Categoría</h1>

    <form action="{{ route('Category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $category->name) }}" required>
        </label>
        <br>
        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{ old('slug', $category->slug) }}" required>
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
