<!DOCTYPE html>
<html>
<body>
    <table border="1">
        <tr>
            <th>ISBN</th>
            <th>judul</th>
            <th>author</th>
            <th>tahun</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->tahun }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>