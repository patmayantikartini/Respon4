<!DOCTYPE html>
<html>
<body>
    <h3>
        <table>
            <tr>
                <th>ISBN: </th>
                <td>{{ $book->isbn }}</td>
            </tr>
            <tr>
                <th>judul: </th>
                <td>{{ $book->judul }}</td>
            </tr>
            <tr>
                <th>author: </th>
                <td>{{ $book->author }}</td>
            </tr>
            <tr>
                <th>tahun: </th>
                <td>{{ $book->tahun }}</td>
            </tr>
        </table>
    </h3>
</body>
</html>