<!DOCTYPE html>
	<title>Document</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <hr>
    <form method="POST" action="/buku">
        @csrf
        <div class="form-group">
           <label for="isbn">ISBN</label>
           <input type="text" class="form-control" id="isbn" name="isbn">
        </div> 
        <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="Judul" name="judul"> 
        </div>
        <div class="form-group">
        <label for="author">Pengarang</label>
        <input type="text" class="form-control" id="author" name="author"> 
        </div>
        <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="text" class="form-control" id="tahun" name="tahun"> 
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach    
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
          
    </form>
</body>
</html>