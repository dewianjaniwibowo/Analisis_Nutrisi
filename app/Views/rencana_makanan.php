<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Rencana Makan Harian</h2>
    
    <!-- Form Tambah Makanan -->
    <form action="<?= base_url('makanan/tambah') ?>" method="POST">
        <div class="form-group">
            <label for="nama_makanan">Nama Makanan:</label>
            <input type="text" class="form-control" name="nama_makanan" required>
        </div>
        <div class="form-group">
            <label for="kalori">Kalori (kkal):</label>
            <input type="number" class="form-control" name="kalori" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Tambah Makanan</button>
    </form>

    <h3 class="mt-4">Daftar Makanan Hari Ini</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Makanan</th>
                <th>Kalori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($makanan as $item): ?>
            <tr>
                <td><?= esc($item['nama_makanan']) ?></td>
                <td><?= esc($item['kalori']) ?> kkal</td>
                <td>
                    <a href="<?= base_url('makanan/hapus/' . $item['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h4>Total Kalori: <?= esc($total_kalori) ?> kkal</h4>
</div>
<?= $this->endSection() ?>
