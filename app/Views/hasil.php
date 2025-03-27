<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .chart-container {
            width: 100%;
            height: 300px;
        }

        .info-container {
            background: #f9f9f9;
            border-left: 5px solid #ff5e5e;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .info-container h2 {
            text-align: center;
            font-size: 22px;
            color: #333;
            margin-bottom: 10px;
        }
        .tips-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .tips-list li {
            font-size: 18px;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .tips-list li:last-child {
            border-bottom: none;
        }
</style>
</head>
<body>

    <div class="container">
        <h2 class="mb-4">🍽️ Hasil Perhitungan Kalori</h2>
        <p><strong>Makanan:</strong> <?= $nama ?></p>
        <p><strong>Kalori:</strong> <?= $kalori ?> kkal</p>
        <p><strong>Rekomendasi:</strong> <?= $saran ?></p>

        <table class="table table-hover table-bordered mt-4">
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

        <!-- Tambahkan elemen canvas untuk Bar Chart -->
        <div class="chart-container">
            <canvas id="barChart"></canvas>
        </div>
    </div>

    <div class="info-container">
            <h2>✨ Tips Menjaga Pola Makan Sehat ✨</h2>
            <ul class="tips-list">
                <li>🥗 Konsumsi makanan seimbang dengan gizi yang cukup</li>
                <li>💧 Minum air putih minimal 8 gelas per hari</li>
                <li>🍏 Perbanyak buah dan sayur dalam menu harian</li>
                <li>⏳ Makan secara teratur dan tidak melewatkan sarapan</li>
                <li>🚫 Kurangi konsumsi gula, garam, dan makanan olahan</li>
            </ul>
        </div>
        
        <a href="https://www.halodoc.com/?srsltid=AfmBOoqPpGp0E8SYZRsulLiv6YGgZAdW5M5O_2fJ2sZSRFuWPSk_zyzE" class="btn btn-primary mt-3" target="_blank">📲 More Details</a>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var ctx = document.getElementById('barChart').getContext('2d');

            var data = {
                labels: ["Kalori Makanan"],
                datasets: [{
                    label: "Jumlah Kalori",
                    data: [<?= $kalori ?>],
                    backgroundColor: ["#ff6384"],
                    borderColor: ["#e74c3c"],
                    borderWidth: 2,
                    borderRadius: 8
                }]
            };

            var options = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        suggestedMax: 500, // Supaya sumbu Y lebih proporsional
                        ticks: {
                            font: {
                                size: 14
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                },
                animation: {
                    duration: 1800,
                    easing: 'easeInOutQuart'
                }
            };

            new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options
            });
        });
    </script>
</body></html>