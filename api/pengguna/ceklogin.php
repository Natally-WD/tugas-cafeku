<?php
include('../koneksi.php');

//saat menggunakan POST


$query="SELECT * FROM pengguna where del = 0 and username = ? and password = ?";
$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_stmt_bind_param($stmt,'ss',$username,$password);

    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result)>0){
            //header("Location: ../../dashboard.php");
           // echo "ada data";
           echo "<script>
                alert('Selamat Datang');
                window.location.href = '../../dashboard.php';
           </script>";
        }else{
            //header("Location: ../../index.php");
            // echo "tidak ada data";
            echo "<script>
                alert('Username atau Password salah');
                window.location.href = '../../index.php';
            </script>";
        }
    } else {
        echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
    }

} else {
echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
}
?>