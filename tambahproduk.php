<?php
include('./api/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

    <style>
        * {
            margin: 0;
            padding:0;
            box-sizing:border-box;
            font-family: sans-serif;
        }

        .navbar {
            background-color:rgb(119, 54, 11);
            display: flex;
            justify-content: space-between;
            padding: 15px 30px;
        }

        .navbar-cafeku {
            color: #ffffff;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-buttons {
            display:flex;
            gap:10px;
        }

        .btn-nav {
            background-color: rgb(175, 5, 5);
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 12px;
            font-size: 14px;
        }

        .main-container {
            flex:1;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .kartuform {
            background-color: #ffffff;
            padding: 40px 35px;
            border-radius: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .judul {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .tambah-form {
            display: flex;
            flex-direction: column;
            gap:15px;
        }

        .ktgrinput input {
            width: 100%;
            padding: 12px 15px;
            border: 1.5px solid #ccc;
            border-radius: 12px;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
            color: #333;
            background-color: #f9f9f8;
        }

        .ktgrinput input:focus {
            border-color: #d6bd96; /* Warna border saat fokus */
            box-shadow: 0 0 5px rgba(214, 189, 150, 0.5); /* Efek bayangan saat fokus */
        }

        .btn-tambah {
            width: 100%;
            padding: 12px;
            background-color:rgb(61, 37, 4);
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top:10px;
        }

        .btn-tambah:hover {
            background-color: #c5ab83; /* Warna saat hover */
        }
    </style>

</head>
<body>
    <div class = "navbar">
        <div class = "navbar-cafeku">CAFEKU</div>
            <div class="nav-buttons">
                <a href = "dashboard.php" class="btn-nav" role="button">Kembali ke Dashboard</a>
                <a href = "index.php" class="btn-nav" role="button">KELUAR</a>
            </div>  
        </div>

    <div class="main-container">
        <div class="kartuform">
            <p class="judul"> Form Tambah Produk</p>
            <form action="api/produk/insertproduk.php" method="post" class="tambah-form">
                    <div class="ktgrinput">
                        <input name='nama' class="inputuser" type="text" placeholder="Nama Produk"/>
                    </div>
                    <div class="ktgrinput">
                        <input name='harga' class="inputuser" type="number" step="any" placeholder="Harga"/>
                    </div>
                    <div class="ktgrinput">
                        <input name='stok' class="inputuser" type="number" placeholder="Stok"/>
                    </div>
                    <button type="submit" class="btn-tambah">Tambah Produk</button>
            </form>
        </div>
    </div>
</body>
</html>