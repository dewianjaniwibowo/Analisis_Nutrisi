<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Dokter Gizi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e0f7fa, #fff3e0); /* Gradasi biru muda ke oranye muda */
            margin: 0;
            padding: 30px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 40px;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            width: 220px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .card img:hover {
            transform: scale(1.1);
        }

        .card h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }

        .card a button {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .card a button:hover {
            background: #45a049;
        }

        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<h1>Silakan Pilih Dokter Gizi</h1>

<div class="container">
    <!-- Card Dokter 1 -->
    <div class="card">
        <img src="<?= base_url('images/doktergizi1.jpg') ?>" alt="dr. Gizi A">
        <h3>dr. Riko Saputra</h3>
        <a href="<?= base_url('konsultasi/chat/1') ?>">
            <button>Chat</button>
        </a>
    </div>

    <!-- Card Dokter 2 -->
    <div class="card">
        <img src="<?= base_url('images/doktergizi2.jpg') ?>" alt="dr. Gizi B">
        <h3>dr. Lalisa Mannoban</h3>
        <a href="<?= base_url('konsultasi/chat/2') ?>">
            <button>Chat</button>
        </a>
    </div>
</div>

</body>
</html>
