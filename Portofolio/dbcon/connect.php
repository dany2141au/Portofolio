<?php
$host = 'localhost';
$user  = 'root';
$pass = '';
$db = 'portofolio';
$con = mysqli_connect("$host","$user","$pass","$db");
if (!$con)
{
    echo "gagal konek database";
}
?>