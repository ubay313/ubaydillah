<?php

$pilihan = $_POST['pilihan'];
if ($pilihan == 'admin') 
{    header('Location:login/loginadmin.php');}
else{ header('Location:login/loginsiswa.php');}
?>

