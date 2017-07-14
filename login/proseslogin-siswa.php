<?php

include '../koneksi/koneksi.php';

$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);

$sql  = mysql_query("SELECT * FROM user where email='$email' AND password='$password'");
$row  = mysql_fetch_array($sql);

if ($row['email']==$email AND $row['password']==$password) 
{
    session_start();
    $_SESSION['email']=$row['username'];
    header('location:../index.php');
    
}  else
  {
    echo "<center> <img src='../img/sad.png' width='250px' height='250px'> <br>";
    echo "<h1>EMAIL / PASSWORD yang anda masukan salah. </h1>"."<br>";
    echo "<a href='loginsiswa.php' style='font-size:20pt; color:#fff; background-color:black; padding:10px; text-decoration:none;'> Kembali </a> </center>";
  }

?>
