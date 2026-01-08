<?php
include 'koneksi.php';

$id = (int) $_GET['id'];



$query = "SELECT * FROM dbnews WHERE id = $id";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($result);

$queryRec = "SELECT id, title, image 
             FROM dbnews 
             WHERE id != $id 
             ORDER BY created_at DESC
             LIMIT 4";
$resultRec = mysqli_query($conn, $queryRec);
?>

<!DOCTYPE html>
<html>

<head>
    <title><?= $data['title']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-700 text-white px-40 py-12">
    <div class="grid grid-cols-3 gap-12">
        <div class="col-span-2">
            <h1 class="text-4xl font-bold mb-6"><?= $data['title']; ?></h1>
            <img src="/image/<?= $data['image']; ?>" class="w-full h-[400px] object-cover rounded mb-6">
            <div class="text-justify">
                <p class="text-xl"><?= $data['content']; ?></p>
            </div>
            <a href="index.php" class="text-blue-400 mt-6 inline-block">← Kembali</a>
        </div>
        <div class=" col-span-1">
            <h1 class="font-bold text-center text-4xl">Rekomendasi</h1>
            <ul class="py-6 space-y-4">
                <?php while ($row = mysqli_fetch_assoc($resultRec)) : ?>
                    <li>
                        <a href="news-detail.php?id=<?= $row['id']; ?>"
                            class="flex gap-4 items-start">
                            <img src="/image/<?= $row['image']; ?>"
                                class="w-24 h-20 object-cover rounded"
                                alt="">
                            <div>
                                <p class="font-semibold hover:underline">
                                    <?= $row['title']; ?>
                                </p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</body>
</html>