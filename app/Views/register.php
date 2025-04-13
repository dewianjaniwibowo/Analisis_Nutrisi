<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register Akun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h3 class="text-center mb-4">Buat Akun Baru</h3>
      <form action="<?= base_url('auth/save') ?>" method="post">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Kata Sandi</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Daftar</button>
      </form>
      <div class="text-center mt-3">
        <small>Sudah punya akun? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></small>
      </div>
    </div>
  </div>
</body>
</html>
