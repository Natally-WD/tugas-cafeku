<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | CAFEKU</title>

    <style>
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
    </style>

</head>
<body>
    <div class = "navbar">
        <div class = "navbar-cafeku">
            CAFEKU
        </div>
        <a href = "index.php" class="btn-logout" role="button">KELUAR</a>
    </div>

    <br>
    <br>
    <br>
    <a href = "pengguna.php" class="btn-pengguna" role="button">Pengguna</a>
</body>
</html>