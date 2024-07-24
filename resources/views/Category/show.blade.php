<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Categoría</title>
</head>
<body>
    <h1>Detalles de la Categoría</h1>

    <p>ID: {{ $category->id }}</p>
    <p>Nombre: {{ $category->name }}</p>
    <p>Slug: {{ $category->slug }}</p>

    <a href="{{ route('Category.index') }}">Volver</a>
</body>
</html>
