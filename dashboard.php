<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | CAFEKU</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .navbar {
            background-color:rgb(119, 54, 11);
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

        .btn-logout {
            background-color:rgb(175, 5, 5);
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 12px;
        }

        .menu-container {
            display: flex;
            justify-content: center; 
            align-items: center;     
            gap: 20px;               
            min-height: calc(100vh - 60px); 
        }

        .btn-menu {
            background-color: rgb(119, 54, 11);
            color: #ffffff;
            font-size: 50px;
            font-weight: bold;
            text-decoration: none;
            padding: 80px;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.2s;
            display: inline-block;
            text-align: center;
        }

        .btn-menu:hover {
            background-color: rgb(90, 40, 8);
            transform: translateY(-2px);
        }
        /* .btn-pengguna {
            background-color: rgb(119, 54, 11);
            padding: 50px;
            color: #ffffff;
            align-items: center;
            text-decoration: none;
        } */
    </style>

</head>
<body>
    <div class = "navbar">
        <div class = "navbar-cafeku">
            CAFEKU
        </div>
        <a href = "index.php" class="btn-logout" role="button">KELUAR</a>
    </div>

    <div class="menu-container">
        <a href="pengguna.php" class="btn-menu" role="button">Pengguna</a>
        <a href="produk.php" class="btn-menu" role="button">Produk</a>
    </div>

</body>
</html>