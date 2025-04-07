<!DOCTYPE html>
<html>
<head>
    <title>Chat dengan <?= esc($nama_dokter) ?></title>
</head>
<body>
    <h2>Chat dengan <?= esc($nama_dokter) ?></h2>

    <p>Halo! Silakan mulai konsultasi Anda di sini.</p>

    <form>
        <textarea rows="4" cols="50" placeholder="Tulis pertanyaan Anda di sini..."></textarea><br>
        <button type="submit">Kirim</button>
    </form>

    <br><a href="<?= base_url('konsultasi') ?>">← Kembali ke daftar dokter</a>
</body>
</html>
