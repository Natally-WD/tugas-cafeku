<?php
include('./api/koneksi.php');
include("api/produk/selectproduk.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk | CAFEKU</title>

    <style>
        * {
            margin: 0;
            padding:0;
            box-sizing:border-box;
            font-family: sans-serif;
        }

        body {
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color:rgb(119, 54, 11);
            display: flex;
            justify-content: space-between;
            align-items:center;
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
        
        .main-container {
            flex: 1;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        .content-box {
            width: 100%;
            max-width: 1000px;
        }

        /* HEADER HALAMAN (JUDUL & TOMBOL TAMBAH) */
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .judultabel {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .btn-tambah {
            background-color: rgb(119, 54, 11);
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .btn-tambah:hover {
            background-color: rgb(90, 40, 8);
        }

        /* TABEL */
        .table-wrapper {
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .tabel {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .tabel th {
            background-color: rgb(119, 54, 11);
            color: #ffffff;
            padding: 14px 16px;
            font-size: 15px;
            font-weight: bold;
        }

        .tabel td {
            padding: 14px 16px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
            color: #333;
        }

        .tabel tr:last-child td {
            border-bottom: none;
        }

        .tabel tr:hover {
            background-color: #f9f9f9;
        }

        .text-center {
            text-align: center;
        }

        /* TOMBOL AKSI INLINE */
        .btn-aksi-container {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .btn-edit {
            background-color: #d35400;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .btn-edit:hover {
            background-color: #a04000;
        }

        .btn-hapus {
            background-color: rgb(175, 5, 5);
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .btn-hapus:hover {
            background-color: rgb(130, 4, 4);
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

    <div class = "main-container">
        <div class="content-box">
            <div class="header-section">
                <h2 class="judultabel">Daftar Produk</h2>
                <a href = "tambahproduk.php" class="btn-tambah" role="button">Tambah Data Produk</a>
            </div>
        
        <div class="table-wrapper">
            <table class="tabel">
                <thead>
                    <tr>
                        <th class="text-center" style="width:60px;">No.</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th class="text-center" style="width:160px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (isset($datas) && count($datas) > 0) { ?>
                            <?php for ($i = 0; $i < count($datas); $i++) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $i + 1; ?></td>
                                    <td><?php echo htmlspecialchars($datas[$i]['nama']); ?></td>
                                    <td>Rp <?php echo number_format($datas[$i]['harga'], 0, ',', '.'); ?></td>
                                    <td><?php echo htmlspecialchars($datas[$i]['stok']); ?></td>
                                    <td>
                                        <div class="btn-aksi-container">
                                            <a href="editproduk.php?id=<?php echo $datas[$i]['id']; ?>" class="btn-edit" role="button">Edit</a>
                                            <a href="api/produk/deleteproduk.php?id=<?php echo $datas[$i]['id']; ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="5" class="text-center" style="padding: 20px; color: #777;">
                                    Belum ada data produk.
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>