<?php
include '../koneksi.php';

$query = "SELECT * FROM dbnews ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-200 text-white">
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
        <aside class="w-64 bg-slate-900 min-h-screen text-white px-4 py-8">
            <ul class="space-y-3">
                <li>
                    <a href="admin-dashboard.php" class="block px-3 py-2 rounded hover:bg-slate-700">
                        Admin Dashboard
                    </a>
                </li>
                <li>
                    <a href="kelola.php" class="block px-3 py-2 bg-slate-700">
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
        <main class="flex-1">
            <div class="min-h-screen px-36   py-8 flex flex-col mx-auto">
                <h1 class="text-4xl text-black font-bold text-center mb-6 w-full">Kelola Berita</h1>
                <!-- 
                <div class="text-right mb-6">
                    <a href="tambah-berita.php" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">
                        Tambah Berita
                    </a>
                </div> -->

                <div class="overflow-x-auto bg-slate-700 p-6 rounded-lg shadow-lg">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="text-left">
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Judul</th>
                                <th class="px-4 py-2">Tanggal</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <tr>
                                    <td class="px-4 py-2"><?= $no++; ?></td>
                                    <td class="px-4 py-2"><?= $row['title']; ?></td>
                                    <td class="px-4 py-2"><?= date('d-m-Y', strtotime($row['created_at'])); ?></td>
                                    <td class="px-4 py-2">
                                        <a href="edit.php?id=<?= $row ['id'];?>" class="text-blue-500 hover:underline">Edit</a> |
                                        <a href="proses-hapus.php?id=<?= $row['id']; ?>"
                                            class="text-red-500 hover:underline"
                                            onclick="return confirm('Yakin ingin menghapus berita ini?')">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>


</body>

</html>