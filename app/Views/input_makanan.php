<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Form Input Makanan</h2>
    <form method="post" action="/makanan/hitung" class="w-50 mx-auto p-4 border rounded shadow">
        <div class="mb-3">
            <label class="form-label">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" placeholder="Masukkan Nama Makanan" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Berat (gram)</label>
            <input type="number" name="berat" class="form-control" placeholder="Masukkan Berat (gram)" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Hitung Nutrisi</button>
    </form>
</div>
</body>
</html>
