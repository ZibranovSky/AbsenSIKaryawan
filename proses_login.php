<?php 
  session_start();
  require_once("koneksi.php");
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM tb_daftar WHERE username='$username'";
  $query = $koneksi->query($sql);
  $hasil = $query->fetch_assoc();

  if ($query->num_rows == 0) {
    echo "<div align='center'>username belum terdaftar! <a href='login.php'>back</a></div>";
  }else{
    if ($password <> $hasil['password']) {
      echo "<div align='center'>password salah! <a href='login.php'>back</a></div>";
    }else{
      $_SESSION['username'] = $hasil['username'];
       header('location:admin2.php');
    }
  }
  

 ?>