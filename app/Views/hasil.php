<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Hasil Perhitungan</h2>
    <p>Makanan: <?= $nama ?></p>
<p>Kalori: <?= $kalori ?> kkal</p>
<p><strong>Rekomendasi:</strong> <?= $saran ?></p>

<table class="table table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>Makanan</th>
            <th>Kalori</th>
            <th>Rekomendasi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $nama ?></td>
            <td><?= $kalori ?> kkal</td>
            <td><?= $saran ?></td>
        </tr>
    </tbody>
</table>

<!-- Tambahkan canvas untuk Chart.js -->
<canvas id="kaloriChart" width="400" height="200"></canvas>

<script>
    // Ambil data dari PHP
    var namaMakanan = "<?= $nama ?>";
    var kalori = <?= $kalori ?>;

    // Konfigurasi Chart.js
    var ctx = document.getElementById('kaloriChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar', // Jenis grafik (bisa juga 'line', 'pie', dll.)
        data: {
            labels: [namaMakanan], // Label sumbu X
            datasets: [{
                label: 'Kalori (kkal)',
                data: [kalori], // Data sumbu Y
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }

            options: {
    animation: {
        duration: 2000, // Animasi lebih smooth
        easing: 'easeOutBounce' // Efek pantulan
    }
}
        }
    });
</script>

<script>
    var ctx = document.getElementById('kaloriChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar', // Bisa ganti ke 'pie', 'line', dll.
        data: {
            labels: ['Kalori'],
            datasets: [{
                label: 'Jumlah Kalori',
                data: [<?= $kalori ?>],
                backgroundColor: 'rgba(255, 99, 132, 0.5)', // Warna merah muda
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>

</body>
</html>
