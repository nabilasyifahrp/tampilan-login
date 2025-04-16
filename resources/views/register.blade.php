<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="min-width: 400px;">

      <h3 class="text-center mb-4">Register</h3>

      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">No HP</label>
          <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>

      <div class="mt-3 text-center">
        <a href="{{ route('login') }}">Sudah punya akun? Login di sini</a>
      </div>

    </div>
  </div>
</body>
</html>
