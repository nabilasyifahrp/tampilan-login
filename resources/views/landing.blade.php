<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Selamat Datang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gradient bg-light d-flex justify-content-center align-items-center vh-100">

  <div class="text-center">
    <h1 class="mb-4">Selamat Datang di Aplikasi</h1>
    <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-2">Login</a>
    <a href="{{ route('register') }}" class="btn btn-success btn-lg mx-2">Register</a>
  </div>

</body>
</html>
