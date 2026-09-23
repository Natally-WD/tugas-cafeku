<?php
// Logika Cek Username & Password
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Set Username dan Password yang benar di sini
    $user_benar = "admin";
    $pass_benar = "12345";

    if ($username === $user_benar && $password === $pass_benar) {
        // Jika Benar
        echo "<script>
                alert('Login Berhasil!');
                window.location.href = 'dashboard.php'; // Ganti ke halaman setelah login
              </script>";
        exit;
    } else {
        // Jika Salah -> Muncul Pop-up Popup Alert & Kembali ke Login
        echo "<script>
                alert('Username atau Password salah!');
                window.location.href = 'login.php';
              </script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Son Coffee</title>
    <style>
        body {
            background-color: #f4ece1; /* Warna cream background */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card-login {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }

        .logo {
            width: 120px; /* Ukuran gambar logo */
            height: auto;
            margin-bottom: 10px;
        }

        .title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .form-group {
            margin-bottom: 12px;
        }

        input[type="text"], 
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
            outline: none;
        }

        /* Border warna kustom seperti di gambar */
        input[type="text"] {
            border: 1.5px solid #d8b889;
        }

        input[type="password"] {
            border: 1.5px solid #222222;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #d8b889;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            color: #1a1a1a;
            cursor: pointer;
            font-size: 14px;
            margin-top: 5px;
        }

        .btn-login:hover {
            background-color: #caaa7b;
        }
    </style>
</head>
<body>

    <div class="card-login">
        <!-- Mengambil logo dari folder assets -->
        <img src="assets/logo.png" alt="Logo My Son Coffee" class="logo">
        
        <div class="title">My Son Coffee</div>

        <!-- Form Login -->
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn-login">LOGIN</button>
        </form>
    </div>

</body>
</html>