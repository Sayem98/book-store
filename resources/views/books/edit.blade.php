<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Update book</title>
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Update book page </h2>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" min=0 name="price" value="{{ $book->price }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <input type="text" name="isbn" value="{{ $book->isbn }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="number" name="stock" value="{{ $book->stock }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>

        </form>
    </div>
</body>

</html>

