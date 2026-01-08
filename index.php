<?php
include 'koneksi.php';
$query = "SELECT * FROM dbnews 
ORDER BY created_at DESC LIMIT 9";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <nav class="bg-slate-800 text-white px-12 py-6 flex justify-between fixed w-full">
        <span>Logo</span>
        <ul class="flex items-left gap-4">
            <li>Beranda</li>
            <li>Tentang Kami</li>
            <li>Hubungi Kami</li>
        </ul>
    </nav>

    <div class="min-h-screen bg-slate-700 pt-[72px] py-6">
        <div class="h-[80vh] bg-[url('/image/banner.jpg')] bg-center ">
        </div>
    </div>
    <div class="min-h-screen bg-slate-700">
        <p class="text-center font-bold text-white text-3xl">Berita Terbaru</p>

        <ul class="grid gap-12 px-32 grid-cols-3 pt-[50px] ">
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <li class="w-full h-[240px] bg-gray-500 rounded-xl overflow-hidden">
                    <a href="news-detail.php?id=<?= $row['id']; ?>"
                        class="block w-full h-[220px] bg-gray-500 rounded-xl overflow-hidden transition">
                        <img src="/image/<?= $row['image']; ?>" class="w-full h-[170px] object-cover">
                        <h3 class=" font-bold mt-2 text-white pl-3 uppercase text-lg">
                            <?= $row['title']; ?>
                        </h3>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>

    
</body>

</html>

