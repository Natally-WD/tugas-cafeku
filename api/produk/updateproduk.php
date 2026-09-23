<?php
include('../koneksi.php');

//saat menggunakan POST
$data = json_decode(file_get_contents('php://input'), true);

$query="UPDATE produk SET nama =? , harga =? , stok =? WHERE id =? ";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    $nama=$data['nama'];
    $harga=$data['harga'];
    $stok=$data['stok'];
    $id=$data['id'];

    mysqli_stmt_bind_param($stmt,'sdsi',$nama, $harga, $stok, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['STATUS'=>'BERHASIL', 'PESAN'=>'DATA PRODUK BERHASIL DIUPDATE', 'DATA'=>[]]);
    } else {
        echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'DATA PRODUK GAGAL DIUPDATE', 'DATA'=>[]]);
    }

} else {
    echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
}

?>