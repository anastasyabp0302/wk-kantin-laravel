<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wkantin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="layout">
        <div class="sidebar">
        <img src="{{ asset('images/logo-kantin.png') }}" alt="Wkantin Wikrama School Logo">
            <h2>jajanan</h2>
        </div>
        <div class="container">
            <div class="search-bar">
                <input type="text" placeholder="search....">
            </div>
            <div class="main-content">
                <div class="card">
                    <img src="{{ asset('images/sempol.jpg') }}" alt="Sempol">
                    <p>Sempol</p>
                    <p>Harga : Rp. 1500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/cireng-isi.jpg') }}" alt="Cireng Isi">
                    <p>Cireng Isi</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/tahu-isi.jpg') }}" alt="Tahu Isi">
                    <p>Tahu Isi</p>
                    <p>Harga : Rp. 2000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/pisang-aroma.jpg') }}" alt="Makanan 4">
                    <p>Pisang Aroma</p>
                    <p>Harga : Rp. 2000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/onigiri.webp') }}" alt="Makanan 5">
                    <p>Onigiri</p>
                    <p>Harga : Rp. 3000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/risoles.jpg') }}" alt="Makanan 5">
                    <p>Risoles</p>
                    <p>Harga : Rp. 300</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/srikaya-kue.jpg') }}" alt="Makanan 5">
                    <p>Kue Srikaya</p>
                    <p>Harga : Rp. 2000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/Bakpao-pandan.webp') }}" alt="Makanan 5">
                    <p>Bakpao Pandan</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/brownies.jpg') }}" alt="Makanan 5">
                    <p>Brownies</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/dimsum.jpg') }}" alt="Makanan 5">
                    <p>Dimsum</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/bala-bala.jpg') }}" alt="Makanan 5">
                    <p>Bala-Bala</p>
                    <p>Harga : Rp. 1000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/karoket-bihun.jpg') }}" alt="Makanan 5">
                    <p>Karoket Bihun</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/putu-ayu.jpg') }}" alt="Makanan 5">
                    <p>Putu Ayu</p>
                    <p>Harga : Rp. 1000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/pastel.jpg') }}" alt="Makanan 5">
                    <p>Pastel</p>
                    <p>Harga : Rp. 2500</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@if ($message = Session::get('success'))
    <div>
        <strong>{{ $message }}</strong>
    </div>
@endif

</main>
</body>
</html>
