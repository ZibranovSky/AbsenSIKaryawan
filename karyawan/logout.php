<?php
session_start();
unset($_SESSION['idsi']);
unset($_SESSION['usersi']);
unset($_SESSION['namasi']);
unset($_SESSION['ttlsi']);
unset($_SESSION['jenkelsi']);
unset($_SESSION['agamasi']);
unset($_SESSION['alamatsi']);
unset($_SESSION['teleponsi']);
unset($_SESSION['jabatansi']);
unset($_SESSION['fotosi']);
echo "<script>window.location='../'</script>";	
//session_destroy();
//  unset($_SESSION["sessidpks"]);
?>
