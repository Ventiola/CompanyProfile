<?php
$require = "koneksi.php";
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
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </nav>

    

<div class="flex pt-[70px]">

    <aside class="w-64 bg-slate-900 min-h-screen text-white px-4 py-8">
        <ul class="space-y-3">
            <li>
                <a href="dashboard.php" class="block px-3 py-2 rounded bg-slate-700">
                    Admin Dashboard
                </a>
            </li>
            <li>
                <a href="page-admin/index.php" class="block px-3 py-2 rounded hover:bg-slate-700">
                    Kelola Berita
                </a>
            </li>
            <li>
                <a href="tambah.php" class="block px-3 py-2 rounded hover:bg-slate-700">
                    Tambah Berita
                    
                </a>
            </li>
        </ul>
    </aside>
    <main class="flex-1 p-8 bg-slate-200">
        <h2 class="text-2xl font-bold mb-4 text-center">Admin Dashboard</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white p-5 rounded shadow">
                <p class="text-gray-500 text-sm">Total Berita</p>
                <h3 class="text-2xl font-bold">--</h3>
            </div>

            <div class="bg-white p-5 rounded shadow">
                <p class="text-gray-500 text-sm">Status</p>
                <h3 class="text-lg font-semibold text-green-600">
                    Admin Aktif
                </h3>
            </div>
        </div>

        <div class="mt-6 bg-white p-5 rounded shadow">
            <p class="text-gray-600 text-sm">
                Gunakan menu <b>Kelola Berita</b> untuk menambah, mengubah, atau menghapus berita.
            </p>
        </div>
    </main>

</div>





</body>

</html>

<!-- // $i = 1;
                // while ($i <= 6) {
                //     echo '<li class="flex w-full h-[160px] bg-gray-500 rounded items-center justify-center">
                //     <a class=" text-lg font-bold">tess</a>
    
                //     </li>';
                //     $i++;
                // } -->