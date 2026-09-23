<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login | CAFEKU</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color:rgb(43, 23, 1); /* Warna cream background */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        .kartulogin {
            background-color: #ffffff;
            padding: 40px 35px;
            border-radius: 20px;
            text-align: center;
            width: 100%;
            max-width: 400px;
            margin-bottom: 40px;
        }

        .logo {
            width: 120px; /* Ukuran gambar logo */
            height: auto;
            margin-bottom: 10px;
        }

        .brand-name {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .login-form {
            display: flex;
            flex-direction: column;
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

        .btn-login {
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
        }

        .btn-login:hover {
            background-color: #c5ab83; /* Warna saat hover */
        }

        .footer {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 35px;
            flex-wrap: wrap;
        }

    </style>
</head>
<body>
    <div class="kartulogin">
        <h1></h1>
        <img src="assets/logokopi.png" alt="Logo" class="logo">
        <div class="brand-name">CAFEKU</div>
        <form action="api/pengguna/ceklogin.php" method="POST" class="login-form">
            <div class="ktgrinput">
                <input name="username" type="text" placeholder="Username" required>
            </div>
            <br>
            <div class="ktgrinput">
                <input name="password" type="password" placeholder="Password" required>
            </div>
            <br>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2026 CAFEKU. All rights reserved.</p>
    </div>
</body>
</html>