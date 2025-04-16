<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Artikel Kesehatan & Gizi</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #fce4ec, #e0f7fa);
      font-family: 'Segoe UI', sans-serif;
    }

    .card-article {
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .card-article:hover {
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
      transform: translateY(-5px);
    }

    .card-title {
      font-weight: 600;
    }

    .section-title {
      font-size: 2rem;
      font-weight: bold;
      color: #007bff;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .section-title i {
      font-size: 1.5rem;
    }

    .btn-outline-primary {
      border-radius: 20px;
    }
  </style>
</head>

<body>

<div class="container py-5">
  <div class="section-title text-center">
    <i class="bi bi-newspaper"></i> Artikel Kesehatan & Gizi
  </div>

  <div class="row g-4">
    <?php foreach ($artikelList as $artikel): ?>
      <div class="col-md-6 col-lg-4">
        <div class="card card-article h-100 shadow-sm">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <h5 class="card-title"><?= $artikel['judul'] ?></h5>
              <p class="card-text text-muted"><?= $artikel['deskripsi'] ?></p>
            </div>
            <a href="<?= site_url('artikel/' . $artikel['slug']) ?>" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Bootstrap Icons (optional buat ikon) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
