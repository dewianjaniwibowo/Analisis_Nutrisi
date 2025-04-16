<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konsultasi Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h2 class="mb-4">Pilih Dokter untuk Konsultasi</h2>
    <div class="row">
        <?php foreach ($dokters as $dokter): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?= base_url('images/' . $dokter['foto']) ?>" class="card-img-top" alt="<?= $dokter['nama'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $dokter['nama'] ?></h5>
                        <p class="card-text">
                            Spesialis: <?= $dokter['spesialis'] ?><br>
                            Pengalaman: <?= $dokter['pengalaman'] ?><br>
                            Rating: <?= $dokter['rating'] ?><br>
                            Harga: Rp<?= number_format($dokter['harga'], 0, ',', '.') ?>
                        </p>
                        <a href="<?= base_url('konsultasi/chat/' . array_search($dokter, $dokters)); ?>" class="btn btn-success">Konsultasi Sekarang</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
