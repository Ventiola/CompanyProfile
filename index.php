<?php
include 'koneksi.php';
$query = "SELECT * FROM dbnews 
ORDER BY created_at DESC LIMIT 6";
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
            <li >
                <a href="#beranda">Beranda</a>
            </li>
            <li>
                <a href="#tentang">Tentang Kami</a>
            </li>
            <li>
                <a href="#kontak">Hubungi Kami</a>
            </li>
        </ul>
    </nav>

    <div id="beranda" class="min-h-screen bg-slate-700 pt-[72px] py-6">
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

    <section id="tentang" class="min-h-screen bg-slate-700 px-48 py-16">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-4xl font-bold text-white">
                Tentang Kami
            </h2>
            <p class="text-slate-300 mt-4">
                Mengenal lebih dekat siapa kami dan apa yang kami kerjakan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-16 items-center">
            <div>
                <h3 class="text-2xl font-semibold text-white mb-4">
                    Profil Perusahaan
                </h3>
                <p class="text-white mb-4">
                    Kami adalah perusahaan yang bergerak di bidang teknologi dan
                    layanan digital, berfokus pada pengembangan solusi yang
                    inovatif, efisien, dan berorientasi pada kebutuhan klien.
                </p>

                <p class="text-white mb-4">
                    Dengan tim yang berpengalaman, kami berkomitmen untuk
                    memberikan hasil terbaik melalui kualitas, kepercayaan,
                    dan profesionalisme.
                </p>
            </div>
            <div>
                <img src="/image/about.jpg"
                    class="w-full h-[350px] object-cover rounded-xl shadow-lg"
                    alt="Tentang Kami">
            </div>
        </div>
    </section>

    <section id="kontak" class="bg-slate-900 text-white px-20 py-10">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold">Hubungi Kami</h2>

            <div class="mt-14 mb-2 flex justify-center gap-12">

                <div class="flex items-center space-x-2">
                    <a href="mailto:contact@example.com" class="text-lg hover:underline">Email: YourCompany@example.com</a>
                </div>

                <div class="flex items-center space-x-2">
                    <a href="tel:+62123456789" class="text-lg hover:underline">Whatsapp: +62 123 456 789</a>
                </div>


            </div>
        </div>
    </section>










</body>

</html>