<?php

include_once "sesi_karyawan.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/karyawan/title.php"; break;
	case 'profil': include 'modul/karyawan/profil.php'; break;
	case 'edit': include 'modul/karyawan/edit.php'; break;
	case 'update': include 'modul/karyawan/update.php'; break;
	case 'index': include 'awal.php';
}
?>
