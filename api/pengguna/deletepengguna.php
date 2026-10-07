<?php
include('../koneksi.php');

//saat menggunakan POST
// $data = json_decode(file_get_contents('php://input'), true);

$query="UPDATE pengguna SET del=1, dtm=NOW() WHERE id =? ";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    $id=$_GET['id'];

    mysqli_stmt_bind_param($stmt,'i',$id);

    if (mysqli_stmt_execute($stmt)) {
        // echo json_encode(['STATUS'=>'BERHASIL', 'PESAN'=>'DATA PENGGUNA BERHASIL DIHAPUS','DATA'=>[]]);
        echo "<script>
        alert('data berhasil dihapus!');
        window.location.href = '../../pengguna.php';
    </script>";
    } else {
        // echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'DATA PENGGUNA GAGAL DIHAPUS','DATA'=>[]]);
        echo "<script>
        alert('data gagal dihapus!');
        window.location.href = '../../pengguna.php';
    </script>";
    }

} else {
    echo json_encode(['STATUS'=>'GAGAL','PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
}
?>