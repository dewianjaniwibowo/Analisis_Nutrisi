<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Makanan</title>

    <!-- Link Font Rubik Bubbles -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('<?= base_url('images/bg_hallogin.webp'); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            image-rendering: crisp-edges;
            image-rendering: -webkit-optimize-contrast;
            font-family: Arial, sans-serif;
        }

        .container {
            background: rgba(255, 255, 255, 0.8); /* Biar ada efek transparan */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 600px;
            width: 100%;
            margin: auto;
            margin-top: 50px;
        }

        /* Tambahkan CSS untuk mengubah font h2 */
        h2 {
            font-family: 'Rubik Bubbles', sans-serif;
            color: black;
            font-size: 24px;
        }
    </style>
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
