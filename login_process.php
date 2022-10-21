<?php
include 'koneksi.php';
include 'caesar.php';

$username = $_POST["username"];
$password = $_POST["password"];
$password_md5 = md5($password);

$passkey = substr($password, 2);
$key = ((strlen($password)) + (strlen($username)) - 5);
$text=$username;
$enkripuser = encrypt($text, $key);

$data = mysqli_query($conn, "SELECT * FROM siswa WHERE username='$enkripuser' and password='$password_md5'");
if($data->num_rows>0){
    $aNamel = mysqli_fetch_assoc($data);

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    $uname = $aNamel['fullname'];

    header("Location:dasboard.php");
} else{
    echo"login gagal";
}



