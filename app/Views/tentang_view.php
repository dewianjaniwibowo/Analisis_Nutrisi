<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #e0f7ec, #ccf2e9);
            color: #333;
        }

        .about-image {
            max-width: 350px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .about-image:hover {
            transform: scale(1.03);
        }

        .highlight {
            color: #e67e22;
            font-weight: bold;
        }

        .italic {
            font-style: italic;
            color: #7f8c8d;
        }

        .emoji {
            font-size: 1.3rem;
        }

        .section-title {
            color: #27ae60;
            font-weight: bold;
            font-size: 1.3rem;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .description p {
            font-size: 1.05rem;
            line-height: 1.7;
        }
    </style>
</head>
<body>

    <div class="container py-5 text-center">
        <h1 class="mb-4">Tentang Kami <span class="emoji">👨‍🍳🥦</span></h1>

        <img src="<?= base_url('images/tentangkami.gif') ?>" alt="Tentang Kami" class="about-image img-fluid mb-4">

        <div class="description">
            <div class="section-title">🌟 Siapa Kami?</div>
            <p>
                Kami adalah tim yang <span class="highlight">berdedikasi</span> untuk menyediakan informasi gizi yang akurat dan mudah dipahami bagi semua kalangan.
                Aplikasi ini hadir untuk membantu Anda lebih sadar akan pola makan dan kandungan makanan yang Anda konsumsi sehari-hari.
            </p>

            <div class="section-title">🍽 Apa yang Kami Tawarkan?</div>
            <p>
                Dengan <span class="highlight">Analisis Nutrisi</span>, Anda bisa mengecek <strong>kalori, protein, lemak, karbohidrat</strong>, hingga vitamin dari berbagai jenis makanan.
                Semua data kami sajikan dengan tampilan yang user-friendly dan mudah diakses kapan pun Anda butuh.
            </p>

            <div class="section-title">🎯 Misi Kami</div>
            <p class="italic">
                Menjadi platform edukasi gizi yang terpercaya, membantu Anda mengambil keputusan yang lebih baik demi gaya hidup sehat dan seimbang.
            </p>

            <div class="section-title">💬 Terima Kasih!</div>
            <p>
                Kami berterima kasih karena Anda telah memilih kami sebagai partner gizi Anda. Jangan ragu untuk memberikan <span class="highlight">saran & masukan</span> untuk pengembangan fitur ke depan. 💚
            </p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
