<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami</title>
    <style>
        body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(to bottom, #e0f7ec, #ccf2e9); /* gradasi menggantikan background-color */
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    
        }



        h1 {
            margin-top: 40px;
            color: #2c3e50;
            font-size: 2.5rem;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            text-align: center;
        }

        .container img {
            max-width: 350px;
            margin: 20px auto;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .container img:hover {
            transform: scale(1.03);
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
            margin: 15px 0;
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
    </style>
</head>
<body>
    <h1>Tentang Kami <span class="emoji">👨‍🍳🥦</span></h1>

    <div class="container">
        <img src="<?= base_url('images/tentangkami.gif') ?>" alt="Tentang Kami">

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
</body>
</html>
