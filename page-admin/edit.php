<?php
require "../koneksi.php";

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = (int) $_GET['id'];

$query = "SELECT * FROM dbnews WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Berita</title>
</head>

<body>

    <!-- NAVBAR -->
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

    <div class="flex pt-[70px]">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-slate-900 min-h-screen text-white px-4 py-8">
            <ul class="space-y-3">
                <li>
                    <a href="admin-dashboard.php"
                        class="block px-3 py-2 rounded hover:bg-slate-700">
                        Admin Dashboard
                    </a>
                </li>
                <li>
                    <a href="kelola.php"
                        class="block px-3 py-2 rounded bg-slate-700">
                        Kelola Berita
                    </a>
                </li>
                <li>
                    <a href="tambah.php"
                        class="block px-3 py-2 rounded hover:bg-slate-700">
                        Tambah Berita
                    </a>
                </li>
            </ul>
        </aside>

        <!-- MAIN -->
        <main class="flex-1 bg-slate-200 px-36 py-6">

            <div class="flex flex-col mx-auto my-12 w-full bg-slate-700 py-6 px-8 rounded-xl">

                <h1 class="text-white text-2xl font-bold text-center">
                    Edit Berita
                </h1>

                <form action="proses-edit.php" method="post" class="mt-8 space-y-5">

                    <!-- ID (hidden) -->
                    <input type="hidden" name="id" value="<?= $data['id']; ?>">

                    <!-- Judul -->
                    <div>
                        <label class="block text-white text-sm mb-1">
                            Judul Berita
                        </label>
                        <input
                            type="text"
                            name="title"
                            value="<?= htmlspecialchars($data['title']); ?>"
                            class="w-full px-3 py-2 rounded bg-slate-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <!-- Isi -->
                    <div>
                        <label class="block text-white text-sm mb-1">
                            Isi Berita
                        </label>
                        <textarea
                            name="content"
                            rows="6"
                            class="w-full px-3 py-2 rounded bg-slate-800 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required><?= htmlspecialchars($data['content']); ?></textarea>
                    </div>

                    <!-- Action -->
                    <div class="flex justify-between items-center pt-4">
                        <a href="kelola.php"
                            class="text-slate-300 text-sm hover:underline">
                            ← Kembali
                        </a>

                        <button
                            type="submit"
                            class="bg-slate-500 px-6 py-2 rounded text-white font-semibold hover:bg-slate-400 transition">
                            Update
                        </button>
                    </div>

                </form>

            </div>

        </main>
    </div>

</body>
</html>
