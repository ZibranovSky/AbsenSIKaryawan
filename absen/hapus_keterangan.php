<?php 
include '../koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tb_keterangan WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);
$hapus_f = mysqli_fetch_array($query);

//proses hapus gambar
$file = "../karyawan/modul/karyawan/images/".$hapus_f['bukti'];
unlink($file);

$sql_h = "DELETE FROM tb_keterangan WHERE id = '$id'";
$hapus = mysqli_query($koneksi, $sql_h);

if ($hapus) {
	header("location: ../data_keterangan.php");
}else{
	echo "gagal dihapus";
}


 ?>
