<?php
    include('./api/koneksi.php');
    include("api/pengguna/selectonepengguna.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Edit Pengguna</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR */
        .navbar {
            background-color: rgb(119, 54, 11);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            height: 60px;
        }

        .navbar-cafeku {
            color: #ffffff;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
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

        /* KONTAINER UTAMA UNTUK MENGETENGAHKAN FORM */
        .main-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* KARTU FORM */
        .kartuform {
            background-color: #ffffff;
            padding: 30px;
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

        .edit-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
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
            border-color: rgb(119, 54, 11);
            box-shadow: 0 0 5px rgba(119, 54, 11, 0.3);
        }

        .btn-simpan {
            width: 100%;
            padding: 12px;
            background-color: rgb(61, 37, 4);
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-simpan:hover {
            background-color: rgb(119, 54, 11);
        }
    </style>

</head>
<body>
    <div class="navbar">
        <div class="navbar-cafeku">CAFEKU</div>
        <div class="nav-buttons">
            <a href="pengguna.php" class="btn-nav" role="button">Kembali ke Pengguna</a>
            <a href="index.php" class="btn-nav" role="button">KELUAR</a>
        </div>
    </div>

    <div class="main-container">
        <div class="kartuform">
            <p class="judul">Form Edit Pengguna</p>

            <form action="api/pengguna/updatepengguna.php" method="post" class="edit-form">
                <!-- ID Pengguna disembunyikan -->
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($datas[0]['id']); ?>" />

                <div class="ktgrinput">
                    <input name="nama" type="text" placeholder="Nama Pengguna" value="<?php echo htmlspecialchars($datas[0]['nama']); ?>" required />
                </div>
                <div class="ktgrinput">
                    <input name="username" type="text" placeholder="Username" value="<?php echo htmlspecialchars($datas[0]['username']); ?>" required />
                </div>
                <div class="ktgrinput">
                    <input name="password" type="password" placeholder="Password" value="<?php echo htmlspecialchars($datas[0]['password']); ?>" required />
                </div>
                <div class="ktgrinput">
                    <input name="alamat" type="text" placeholder="Alamat" value="<?php echo htmlspecialchars($datas[0]['alamat']); ?>" required />
                </div>
                <div class="ktgrinput">
                    <input name="nohp" type="tel" placeholder="Nomor HP" value="<?php echo htmlspecialchars($datas[0]['nohp']); ?>" required />
                </div>

                <button type="submit" class="btn-simpan">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</body>
</html>