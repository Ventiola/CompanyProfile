<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];



$query= "SELECT * FROM dbuser WHERE username = '$username' AND role = 'admin'";

$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user){
    if ($password == $user['password']){

        $_SESSION['login'] = true;
        $_SESSION['role'] = 'admin';
        $_SESSION['username'] = $user['username'];

        header ("Location: admin-dashboard.php");
        exit;

    }
}

echo "Login gagal";


