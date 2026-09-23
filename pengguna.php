<?php
include('./api/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | CAFEKU</title>

    <!-- <style>
        * {
            margin: 0;
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

        .btn-logout {
            background-color:rgb(175, 5, 5);
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 12px;
        }

        .btn-pengguna {
            background-color: rgb(119, 54, 11);
            padding: 50px;
            color: #ffffff;
            align-items: center;
            text-decoration: none;
        }
    </style> -->

</head>
<body>
    <!-- <div class = "navbar">
        <div class = "navbar-cafeku">
            CAFEKU
        </div>
        <a href = "index.php" class="btn-logout" role="button">KELUAR</a>
    </div> -->

    <div class = "main">
        <p class = "judultabel">Daftar Pengguna</p>
        <?php
            include("api/pengguna/selectpengguna.php");
        ?>
        <table class='tabel'>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </tr>
                <?php
                    for ($i=0; $i < count($datas); $i++) {
                ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo $datas[$i]['nama']?></td>
                    <td><?php echo $datas[$i]['username']?></td>
                    <td><?php echo $datas[$i]['alamat']?></td>
                    <td><?php echo $datas[$i]['nohp']?></td>
                    <td></td>
                </tr>
                <?php
                    }
                ?>
        </table>
    </div>
</body>
</html>