<?php
include('../koneksi.php');

//saat menggunakan POST
$data = json_decode(file_get_contents('php://input'), true);

$query="UPDATE pengguna SET nama =? , username=?, password=?, alamat =? , nohp =? WHERE id =? ";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $id=$_POST['id'];

    mysqli_stmt_bind_param($stmt,'sssssi',$nama, $username, $password, $alamat, $nohp, $id);

    if (mysqli_stmt_execute($stmt)) {
        // echo json_encode(['STATUS'=>'BERHASIL', 'PESAN'=>'DATA PENGGUNA BERHASIL DIUPDATE', 'DATA'=>[]]);
        echo "<script>
            alert('data berhasil di Update!');
            window.location.href = '../../pengguna.php';
        </script>";
    } else {
        // echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'DATA PENGGUNA GAGAL DIUPDATE', 'DATA'=>[]]);
        echo "<script>
        alert('data gagal di update!');
        window.location.href = '../../editpengguna.php?id=$id';
    </script>";
    }

} else {
    echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
}

?>