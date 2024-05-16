<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin App</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="images/logo-kantin.png" alt="Logo Kantin" width="50">
            </div>
            <div class="navbar-menu">
                <a href="#">Home</a>
                <a href="#">Detail barang</a>
            </div>
        </nav>
    </header>
    <main>
    <title>Daftar Jajanan</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<h1>Daftar Jajanan</h1>
<a href="{{ route('jajanans.create') }}">Tambah Jajanan</a>

@if ($message = Session::get('success'))
    <div>
        <strong>{{ $message }}</strong>
    </div>
@endif

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Gambar</th>
    </tr>
    @foreach ($jajanans as $jajanan)
    <tr>
        <td>{{ $jajanan->nama }}</td>
        <td>{{ $jajanan->harga }}</td>
        <td><img src="{{ asset('images/' . $jajanan->gambar) }}" width="100"></td>
    </tr>
    @endforeach
</table>
</main>
</body>
</html>
