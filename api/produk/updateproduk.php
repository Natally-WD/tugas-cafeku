<?php
include('../koneksi.php');

//saat menggunakan POST
$data = json_decode(file_get_contents('php://input'), true);

$query="UPDATE produk SET nama =? , harga =? , stok =? WHERE id =? ";

$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $id=$_POST['id'];

    mysqli_stmt_bind_param($stmt,'sdii',$nama, $harga, $stok, $id);

    if (mysqli_stmt_execute($stmt)) {
        //echo json_encode(['STATUS'=>'BERHASIL', 'PESAN'=>'DATA PRODUK BERHASIL DIUPDATE', 'DATA'=>[]]);
        echo "<script>
            alert('data berhasil di Update!');
            window.location.href = '../../produk.php';
        </script>";
    } else {
        //echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'DATA PRODUK GAGAL DIUPDATE', 'DATA'=>[]]);
        echo "<script>
        alert('data gagal di update!');
        window.location.href = '../../editproduk.php?id=$id';
    </script>";
    }

} else {
    echo json_encode(['STATUS'=>'GAGAL', 'PESAN'=>'MASALAH KONEKSI','DATA'=>[]]);
}

?>