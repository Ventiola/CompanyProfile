<?php
$require = 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-slate-800">
    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="bg-slate-700 text-white w-full max-w-md p-8 rounded-xl shadow-lg">
            <h1 class="text-3xl font-bold text-center mb-6">Admin Login</h1>

            <form action="proses-login.php" method="post" class="space-y-4">
                
                <div>
                    <label class="block mb-1">Username</label>
                    <input type="text" name="username"
                        class="w-full px-4 py-2 rounded bg-slate-800 border border-slate-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block mb-1">Password</label>
                    <input type="password" name="password"
                        class="w-full px-4 py-2 rounded bg-slate-800 border border-slate-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 py-2 rounded font-semibold transition">
                    Login
                </button>
            </form>
        </div>

    </div>
</body>

</html>