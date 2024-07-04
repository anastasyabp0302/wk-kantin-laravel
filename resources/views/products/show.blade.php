<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Sempol</h1>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="{{asset('images/sempol.jpg')}}" alt="Sempol">
        </div>
        <div class="col-md-6">
            <h3 class="my-3">Harga: Rp. 1500</h3>
            <p>Sempol adalah jajanan khas Indonesia yang terbuat dari campuran daging ayam dan tepung tapioka
             yang dibentuk seperti sate, kemudian digoreng hingga matang. Biasanya disajikan dengan saus sambal 
             atau saus kacang</p>
            <a href="{{ route('jajanans.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="container">
    <h1 class="my-4">Cireng Isi</h1>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="{{asset('images/cireng-isi.jpg')}}" alt="Sempol">
        </div>
        <div class="col-md-6">
            <h3 class="my-3">Harga: Rp. 2500</h3>
            <p>Cireng adalah camilan khas Sunda yang memiliki kepanjangan aci (tepung kanji) goreng. Makanan ringan
             ini memiliki tekstur krispi di luar dan kenyal di dalam. Rasanya pun gurih karena terbuat dari adonan 
             tepung kanji yang dipadu bawang putih.</p>
            <a href="{{ route('jajanans.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="container">
    <h1 class="my-4">Tahu Isi</h1>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="{{asset('images/cireng-isi.jpg')}}" alt="Sempol">
        </div>
        <div class="col-md-6">
            <h3 class="my-3">Harga: Rp. 2000</h3>
            <p></p>
            <a href="{{ route('jajanans.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
</body>
</html>
