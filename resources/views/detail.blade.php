<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
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

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            text-align: center;
        }

        .product-image img {
            width: 100%;
            max-width: 400px;
            height: auto;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #F8C794;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo">
    </header>
    <div class="container">
        <div class="product-image">
            <img src="sempol.jpg" alt="Sempol">
        </div>
        <h1>Sempol</h1>
        <p>Harga: Rp. 1500</p>
        <p>Sempol adalah makanan ringan yang terbuat dari daging ayam dan tepung yang dibentuk seperti sate dan digoreng.
             Biasanya disajikan dengan saus sambal atau saus kacang.</p>
        <a href="index.blade.php" class="back-link">Kembali ke Daftar Jajanan</a>
    </div>
    </div>
        <h1>Cireng Isi</h1>
        <p>Harga: Rp. 2500</p>
        <p>Cireng adalah camilan khas Sunda yang memiliki kepanjangan aci (tepung kanji) goreng. Makanan ringan ini memiliki tekstur krispi di luar dan kenyal di dalam.
         Rasanya pun gurih karena terbuat dari adonan tepung kanji yang dipadu bawang putih.</p>
        <a href="index.blade.php" class="back-link">Kembali ke Daftar Jajanan</a>
    </div>
</body>
</html>
