<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Library</title>

</head>
<body>
    
    @if (session('success'))
    Libro aggiunto alla lista
    @endif

    <ul>
        @foreach ($books as $book)
        <li>
            {{$book['author']}}, <a href="{{route('book.show', ['libro' => $book['id']])}}"> {{$book['title']}} </a>, prima ed. {{$book['year']}}
        </li>
        @endforeach
    </ul>
    
</body>
</html>