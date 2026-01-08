<?php
require "../koneksi.php";

$title = $_POST['title'];
$content   = $_POST['content'];

$image = null;

if (!empty($_FILES['image']['name'])) {
    $image = time() . "-" . $_FILES['image']['name'];
    $imageLoc  = $_FILES['image']['tmp_name'];

    move_uploaded_file($imageLoc, "../image/" . $image);
}

$query = "INSERT INTO dbnews (title, content, image)
          VALUES ('$title', '$content', '$image')";

mysqli_query($conn, $query);

header("Location: admin-dashboard.php");
exit;
