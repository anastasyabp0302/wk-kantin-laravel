<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jajanan</title>
</head>
<body>

<h1>Tambah Jajanan</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('jajanans.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <label for="harga">Harga:</label>
    <input type="text" id="harga" name="harga">
    <label for="gambar">Gambar:</label>
    <input type="file" id="gambar" name="gambar">
    <button type="submit">Tambah</button>
</form>

</body>
</html>
