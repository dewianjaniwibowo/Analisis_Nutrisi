<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konsultasi dengan <?= $dokter['nama']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Konsultasi dengan <?= $dokter['nama']; ?></h3>
        <div class="card mb-4" style="max-width: 600px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('images/' . $dokter['foto']); ?>" class="img-fluid rounded-start" alt="<?= $dokter['nama']; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $dokter['nama']; ?></h5>
                        <p class="card-text">Spesialis: <?= $dokter['spesialis']; ?></p>
                        <p class="card-text">Pengalaman: <?= $dokter['pengalaman']; ?></p>
                        <p class="card-text">Rating: <?= $dokter['rating']; ?></p>
                        <p class="card-text">Harga: Rp<?= number_format($dokter['harga']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <form>
            <div class="mb-3">
                <label for="pesan" class="form-label">Tulis pertanyaan kamu:</label>
                <textarea class="form-control" id="pesan" rows="4" placeholder="Halo dok, saya ingin bertanya tentang..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>
