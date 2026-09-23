<?php
include('../koneksi.php');

//saat menggunakan POST
$data = json_decode(file_get_contents('php://input'), true);
//pertama
$query ="INSERT INTO produk(nama, harga, stok) VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    //kedua
    $nama=$data['nama'];
    $harga=$data['harga'];
    $stok=$data['stok'];
    //ketiga
    mysqli_stmt_bind_param($stmt,'sdi',$nama,$harga,$stok);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(['STATUS'=>'BERHASIL', 'PESAN'=>'DATA BERHASIL DISIMPAN', 'DATA'=>[]]);
    }else{
        echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'DATA GAGAL DISIMPAN','DATA'=>[]]);
    }
}else{
    echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI', 'DATA'=>[]]);
}
?>