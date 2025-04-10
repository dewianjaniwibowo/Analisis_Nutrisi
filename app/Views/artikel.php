<!DOCTYPE html>
<html>
<head>
  <title>Artikel Kesehatan</title>

  <!-- ✅ Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #fce4ec, #e0f7fa); /* 🌈 warna gradasi lembut */
    }

    .hover-shadow:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <h2 class="mb-4 text-center fw-bold text-primary">📰 Artikel Kesehatan & Gizi</h2>

    <div class="row">
      <?php foreach ($artikelList as $artikel): ?>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card shadow-sm h-100 border-0 hover-shadow">
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h5 class="card-title text-dark"><?= $artikel['judul'] ?></h5>
                <p class="card-text text-muted"><?= $artikel['deskripsi'] ?></p>
              </div>
              <a href="<?= site_url('artikel/' . $artikel['slug']) ?>" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
