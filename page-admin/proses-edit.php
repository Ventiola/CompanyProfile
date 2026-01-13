<?php
require '../koneksi.php';

if (!isset($_POST['id'])) {
    die('ID tidak ditemukan');
}

$id = (int) $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$query = "UPDATE dbnews 
          SET title = '$title', content = '$content'
          WHERE id = $id";

mysqli_query($conn, $query);

header("Location: kelola.php");
exit;
