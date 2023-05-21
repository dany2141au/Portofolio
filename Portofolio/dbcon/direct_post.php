<?php
//connect database
include 'connect.php';
//$con=mysqli_connect("localhost","root","","portofolio")
$name = $_POST['name'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

//check form kosong
if(empty ($name) || empty ($email) || empty($pesan))
{
    echo "Form ada yang kosong, silahkan isi ulang";
    }
    else{
        $query = mysqli_query($con,"insert into pesan set name = '$name', email = '$email', pesan = '$pesan'");
        if ($query == TRUE){
            echo "Data berhasil ditambahkan. silahkan liaht daftar <a href='comment.php'>komentar</a>";
        }
        else{
            echo "error";
    }
}