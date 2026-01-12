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
                    <a href="admin-dashboard.php" class="block px-3 py-2 rounded hover:bg-slate-700">
                        Admin Dashboard
                    </a>
                </li>
                <li>
                    <a href="kelola.php" class="block px-3 py-2 rounded hover:bg-slate-700">
                        Kelola Berita
                    </a>
                </li>
                <li>
                    <a href="tambah.php" class="block px-3 py-2 rounded bg-slate-700">
                        Tambah Berita
                    </a>
                </li>
            </ul>
        </aside>
        <!-- sini -->
        <!-- <main class="min-h-screen flex items-center w-full bg-slate-200 px-48 py-6"> -->
            <main class="flex-1 p-6 bg-slate-200 px-36">
            
            <div class="flex flex-col mx-auto my-12 w-full bg-slate-700 py-2 px-8 rounded-xl">

                <h1 class="text-white text-2xl font-bold text-center">
                    Tambah Berita
                </h1>

                <form action="proses-tambah.php" method="post" enctype="multipart/form-data" class="mt-8 space-y-5">

                    <div>
                        <label class="block text-white text-sm mb-1">
                            Judul Berita
                        </label>
                        <input
                            type="text"
                            name="title"
                            class="w-full px-3 py-2 rounded bg-slate-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Judul berita"
                            required>
                    </div>

                    <div>
                        <label class="block text-white text-sm mb-1">
                            Gambar
                        </label>
                        <input
                            type="file"
                            name="image"
                            class="w-full text-sm text-slate-300">
                    </div>

                    <div>
                        <label class="block text-white text-sm mb-1">
                            Isi Berita
                        </label>
                        <textarea
                            name="content"
                            rows="6"
                            class="w-full px-3 py-2 rounded bg-slate-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Tulis isi berita..."
                            required></textarea>
                    </div>

                    <div class="flex justify-between items-center p-4">
                        <a href="admin-dashboard.php" class="text-slate-300 text-sm hover:underline">
                            ← Kembali
                        </a>

                        <button
                            type="submit"
                            class="bg-slate-500 px-6 py-2 rounded text-white font-semibold hover:bg-slate-400 transition">
                            Simpan
                        </button>
                    </div>

                </form>

            </div>

        </main>
    </div>
    </div>