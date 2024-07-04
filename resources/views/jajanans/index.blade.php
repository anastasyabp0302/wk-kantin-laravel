<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wkantin</title>
    <script>
        function addToCart(productId, productName, productPrice) {
            // Ambil data keranjang dari localStorage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Tambahkan produk ke keranjang
            cart.push({id: productId, name: productName, price: productPrice});

            // Simpan kembali keranjang ke localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            alert(productName + ' telah ditambahkan ke keranjang!');
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8e6d1;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #F8C794;
            padding: 10px;
            text-align: center;
        }

        header img {
            width: 100px;
            height: auto;
        }

        .layout {
            display: flex;
        }

        .sidebar {
            background-color: #F8C794;
            width: 200px;
            padding: 35px;
            text-align: left;
            height: 100vh;
            position: fixed;
        }

        .sidebar img {
            width: 150px;
            height: auto;
        }

        .sidebar h1 {
            margin-top: 0;
            text-align: center;
        }

        .container {
            flex-grow: 1;
            padding: 20px;
            margin-left: 200px;
            text-align: center;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            padding: 15px;
            max-width: 200px;
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .card:active {
            transform: scale(0.95);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .card p {
            margin: 10px 0;
        }

        @media (max-width: 768px) {
            .card-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .card-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="layout">
        <div class="sidebar">
            <img src="{{ asset('images/logo-kantin.png') }}" alt="Wkantin Wikrama School Logo">
            <h1>Daftar Jajanan</h1>
        </div>
        <div class="container">
            <div class="search-bar">
                <input type="text" placeholder="search....">
            </div>
            <div class="card-container">
                <div class="card">
                    <img src="{{ asset('images/sempol.jpg' ) }}" alt="Sempol">
                    <p>Sempol</p>
                    <p>Harga : Rp. 1500</p>
                    <button onclick="location.href='{{ route('products.show', ['id' => 1]) }}'" class="btn btn-primary">Detail</button>
                    <button onclick="addToCart(1, 'Sempol', 1500)">Tambah ke Keranjang</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/cireng-isi.jpg') }}" alt="Cireng Isi">
                    <p>Cireng Isi</p>
                    <p>Harga : Rp. 2500</p>
                    <button onclick="location.href='{{ route('products.show', ['id' => 2]) }}'" class="btn btn-primary">Detail</button>
                    <button onclick="addToCart(2, 'Cireng Isi', 2500)">Tambah ke Keranjang</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/tahu-isi.jpg') }}" alt="Tahu Isi">
                    <p>Tahu Isi</p>
                    <p>Harga : Rp. 2000</p>
                    <button onclick="location.href='{{ route('products.show', ['id' => 2]) }}'" class="btn btn-primary">Detail</button>
                    <button onclick="addToCart(3, 'Tahu Isi', 2000)">Tambah ke Keranjang</button>
                </div>
                <div class="card">
                    <img src="{{ asset('images/pisang-aroma.jpg') }}" alt="Pisang Aroma">
                    <p>Pisang Aroma</p>
                    <p>Harga : Rp. 2000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/onigiri.webp') }}" alt="Onigiri">
                    <p>Onigiri</p>
                    <p>Harga : Rp. 3000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/risoles.jpg') }}" alt="Risoles">
                    <p>Risoles</p>
                    <p>Harga : Rp. 3000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/srikaya-kue.jpg') }}" alt="Kue Srikaya">
                    <p>Kue Srikaya</p>
                    <p>Harga : Rp. 2000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/Bakpao-pandan.webp') }}" alt="Bakpao Pandan">
                    <p>Bakpao Pandan</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/brownies.jpg') }}" alt="Brownies">
                    <p>Brownies</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/dimsum.jpg') }}" alt="Dimsum">
                    <p>Dimsum</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/bala-bala.jpg') }}" alt="Bala-Bala">
                    <p>Bala-Bala</p>
                    <p>Harga : Rp. 1000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/karoket-bihun.jpg') }}" alt="Karoket Bihun">
                    <p>Karoket Bihun</p>
                    <p>Harga : Rp. 2500</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/putu-ayu.jpg') }}" alt="Putu Ayu">
                    <p>Putu Ayu</p>
                    <p>Harga : Rp. 1000</p>
                </div>
                <div class="card">
                    <img src="{{ asset('images/pastel.jpg') }}" alt="Pastel">
                    <p>Pastel</p>
                    <p>Harga : Rp. 2500</p>
                </div>
            </div>
        </div>
    </div>
    <a href="/keranjang">Lihat Keranjang</a>
</body>
</html>
