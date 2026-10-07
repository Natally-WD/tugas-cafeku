<?php
include('../koneksi.php');

//saat menggunakan POST
$data = json_decode(file_get_contents('php://input'), true);
//pertama
$query ="INSERT INTO pengguna(nama, username, password, alamat, nohp) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    //kedua
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    //ketiga
    mysqli_stmt_bind_param($stmt,'sssss',$nama,$username,$password,$alamat,$nohp);

    if (mysqli_stmt_execute($stmt)) {
        // echo json_encode(['STATUS'=>'BERHASIL', 'PESAN'=>'DATA BERHASIL DISIMPAN', 'DATA'=>[]]);
        echo "<script>
                alert('data berhasil ditambahkan!');
                window.location.href = '../../pengguna.php';
            </script>";
    }else{
        // echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'DATA GAGAL DISIMPAN','DATA'=>[]]);
        echo "<script>
                alert('data gagal ditambahkan!');
                window.location.href = '../../tambahpengguna.php';
            </script>";
    }
}else{
    echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI', 'DATA'=>[]]);
}
?>