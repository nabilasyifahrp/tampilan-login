<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-200 to-purple-300 min-h-screen flex flex-col items-center justify-center">

    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800">Selamat Datang di Dashboard</h1>
        <p class="text-gray-600 mt-2">Silakan login atau daftar untuk melanjutkan</p>
    </div>

    <div class="flex gap-6">
        <a href="{{ route('auth') }}">
            <button class="px-6 py-3 bg-blue-600 text-white rounded-xl shadow-lg hover:bg-blue-700 transition">
                Login
            </button>
        </a>

        <a href="{{ route('register') }}">
            <button class="px-6 py-3 bg-green-500 text-white rounded-xl shadow-lg hover:bg-green-600 transition">
                Register
            </button>
        </a>
    </div>

</body>
</html>
