<?php 
session_start();
// mendapatkan id_produk dari url
$id_produk = $_GET['id'];

//jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya  +1
if (isset($_SESSION['keranjang'][$id_produk]))
{
	$_SESSION['keranjang'][$id_produk]+= 1;
}
//selain itu (belum ada di keranjang), maka produk itu di anggap dibeli 1
else{
	$_SESSION['keranjang'][$id_produk] = 1;
}
// larikan ke halama keranjang
	echo "<script>alert('Produk Anda telah masuk ke keranjang belanja');</script>";
	echo "<script>location='keranjang.php';</script>";
 ?>