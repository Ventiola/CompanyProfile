<?php
require '../koneksi.php';

if (!isset($_GET['id'])) {
    die('ID tidak ditemukan');
}

$id = (int) $_GET['id'];

$query = "DELETE FROM dbnews WHERE id = $id";
mysqli_query($conn, $query);

header("Location: kelola.php");
exit;
