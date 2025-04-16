<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hitung Kalori | Sistem Gizi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ✅ Bootstrap 5.3.2 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background: linear-gradient(135deg, #e0f7fa, #fce4ec);
      font-family: 'Segoe UI', sans-serif;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">🍱 Sistem Kalori</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav me-3">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#layanan">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= site_url('artikel') ?>">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= site_url('konsultasi') ?>">Konsultasi</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('tentang') ?>">Tentang Kami</a></li>
      </ul>
      <!-- Tombol Login dengan Trigger Modal -->
    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    </div>
  </div>
</nav>

<div class="container my-5">
  <div class="card shadow p-4">
    <h1 class="text-center mb-4">Hitung Kalori Makanan</h1>
    <form id="kaloriForm">
      <div class="mb-3">
        <label for="makanan" class="form-label">Nama Makanan</label>
        <input type="text" id="makanan" class="form-control" required placeholder="Contoh: ayam">
      </div>

      <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah Kalori</label>
        <input type="number" id="jumlah" class="form-control" required placeholder="Contoh: 44">
      </div>

      <button type="submit" class="btn btn-success w-100">Hitung Sekarang</button>
    </form>

    <div class="result alert alert-info mt-4 d-none" id="hasil"></div>

    <!-- 🔹 Layanan Konsultasi Gizi -->
<div id="layanan" class="container my-5">
  <div class="card shadow-sm">
    <div class="card-body p-4">
      <h2 class="text-center mb-4">Konsultasi Gizi Online</h2>
      <p class="text-center text-muted">
        Isi formulir berikut. Pertanyaanmu akan dijawab dalam waktu <strong>1x24 jam</strong>.
      </p>

      <form>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" required placeholder="Contoh: Rina Andriani">
        </div>

        <div class="mb-3">
          <label for="umur" class="form-label">Umur</label>
          <input type="number" class="form-control" id="umur" required placeholder="Contoh: 25">
        </div>

        <div class="mb-3">
          <label class="form-label">Jenis Kelamin</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="laki" value="Laki-laki">
            <label class="form-check-label" for="laki">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan">
            <label class="form-check-label" for="perempuan">Perempuan</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="keluhan" class="form-label">Keluhan / Pertanyaan</label>
          <textarea class="form-control" id="keluhan" rows="4" placeholder="Tulis pertanyaanmu di sini..." required></textarea>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-success">Kirim Konsultasi</button>
        </div>
      </form>

      <div class="alert alert-info mt-4 text-center">
        💬 Jawaban akan dikirim dalam waktu <strong>1x24 jam</strong>. Terima kasih telah berkonsultasi!
      </div>
    </div>
  </div>
</div>

    <div class="tips alert alert-warning mt-4">
      🌱 <strong>Tips Sehat:</strong><br/>
      - Konsumsi makanan seimbang dengan gizi yang cukup<br/>
      - Minum air putih minimal 8 gelas per hari<br/>
      - Rutin olahraga dan istirahat cukup
    </div>
  </div>
</div>

<script>
  const form = document.getElementById('kaloriForm');
  const hasil = document.getElementById('hasil');

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const nama = document.getElementById('makanan').value;
    const jumlah = document.getElementById('jumlah').value;

    let saran = "Bagus! Pola makan kamu sehat.";
    if (jumlah > 300) saran = "Waspada! Terlalu banyak kalori.";
    else if (jumlah < 50) saran = "Perlu tambah asupan, terlalu sedikit kalori.";

    hasil.classList.remove("d-none");
    hasil.innerHTML = `
      <h5>Hasil Perhitungan:</h5>
      <p>Makanan: <strong>${nama}</strong></p>
      <p>Jumlah Kalori: <strong>${jumlah} kkal</strong></p>
      <p><em>${saran}</em></p>
    `;
  });
</script>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Masuk ke Akun Anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="nama@email.com" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" id="password" placeholder="Kata Sandi" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="text-center mt-3">
          <small>Belum punya akun? <a href="<?= base_url('register') ?>">Daftar di sini</a></small>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>