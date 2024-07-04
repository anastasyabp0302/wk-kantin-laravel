<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Ambil data keranjang dari localStorage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Tampilkan produk di halaman keranjang
            let cartContainer = document.getElementById('cart-container');
            cart.forEach(item => {
                let productElement = document.createElement('div');
                productElement.textContent = item.name + ' - Rp. ' + item.price;
                cartContainer.appendChild(productElement);
            });
        });
    </script>
</head>
<body>
    <h1>Keranjang Belanja</h1>
    <div id="cart-container">
        <!-- Produk akan ditambahkan di sini -->
    </div>
    <a href="/jajanans">Kembali ke Daftar Jajanan</a>
</body>
</html>
