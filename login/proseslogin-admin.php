<?php

require '../koneksi/koneksi.php';

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

$sql = mysql_query("SELECT * FROM admin where username = '$username' AND password = '$password'");
$row = mysql_fetch_array($sql);

if($row['username']==$username AND $row['password']==$password)
{
    session_start();
    $_SESSION['username']=$username;
    header('Location:../halamanadmin.php');
} else
  {
    echo "<center> <img src='../img/sad.png' width='250px' height='250px'> <br>";
    echo "<h1>EMAIL / PASSWORD yang anda masukan salah. </h1>"."<br>";
    echo "<a href='loginadmin.php' style='font-size:20pt; color:#fff; background-color:black; padding:10px; text-decoration:none;'> Kembali </a> </center>";
  }
?>
