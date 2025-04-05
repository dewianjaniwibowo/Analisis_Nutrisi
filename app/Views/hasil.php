<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hitung Kalori | Sistem Gizi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* RESET DAN DASAR */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #f6f7fb;
      color: #333;
    }

    /* 🔼 NAVBAR */
    nav {
      background-color: #ffffff;
      padding: 16px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo {
      font-weight: bold;
      font-size: 20px;
      color: #333;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 30px;
    }

    .nav-links li a {
      text-decoration: none;
      color: #333;
      font-size: 16px;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-links li a:hover {
      color: #007bff;
    }

    .login-btn {
      background-color: #e74c3c;
      color: white;
      padding: 8px 16px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
    }

    /* KONTEN UTAMA */
    .container {
      max-width: 800px;
      margin: 60px auto;
      padding: 40px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    label, input, button {
      display: block;
      width: 100%;
      font-size: 16px;
      margin-bottom: 20px;
    }

    input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #2ecc71;
      border: none;
      color: white;
      padding: 12px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    button:hover {
      background-color: #27ae60;
    }

    .result {
      margin-top: 30px;
      padding: 20px;
      background-color: #f1f1f1;
      border-left: 5px solid #2ecc71;
      border-radius: 6px;
    }

    .tips {
      margin-top: 40px;
      background-color: #fffbe6;
      padding: 20px;
      border-radius: 6px;
      font-size: 15px;
    }

    @media (max-width: 768px) {
      .nav-links,
      .login-btn {
        display: none;
      }
    }
  </style>
</head>
<body>

  <!-- 🔼 NAVBAR -->
  <nav>
    <div class="logo">🍱 Sistem Kalori</div>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="https://www.halodoc.com" target="_blank">Layanan</a></li>
      <li><a href="#">Artikel</a></li>
      <li><a href="#">Konsultasi</a></li>
      <li><a href="#">Tentang Kami</a></li>
    </ul>
    <a href="#" class="login-btn">Login</a>
  </nav>

  <!-- 🔢 FORM HITUNG KALORI -->
  <div class="container">
    <h1>Hitung Kalori Makanan</h1>
    <form id="kaloriForm">
      <label for="makanan">Nama Makanan</label>
      <input type="text" id="makanan" required placeholder="Contoh: ayam">

      <label for="jumlah">Jumlah Kalori</label>
      <input type="number" id="jumlah" required placeholder="Contoh: 44">

      <button type="submit">Hitung Sekarang</button>
    </form>

    <div class="result" id="hasil" style="display:none;"></div>

    <!-- 💡 TIPS -->
    <div class="tips">
      🌱 <strong>Tips Sehat:</strong><br/>
      - Konsumsi makanan seimbang dengan gizi yang cukup<br/>
      - Minum air putih minimal 8 gelas per hari<br/>
      - Rutin olahraga dan istirahat cukup
    </div>
  </div>

  <!-- 🧠 LOGIKA JAVASCRIPT -->
  <script>
    const form = document.getElementById('kaloriForm');
    const hasil = document.getElementById('hasil');

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      const nama = document.getElementById('makanan').value;
      const jumlah = document.getElementById('jumlah').value;

      let saran = "Bagus! Pola makan kamu sehat.";
      if (jumlah > 300) saran = "Waspada! Terlalu banyak kalori.";
      else if (jumlah < 50) saran = "Perlu tambah asupan, terlalu sedikit kalori.";

      hasil.style.display = 'block';
      hasil.innerHTML = `
        <h3>Hasil Perhitungan:</h3>
        <p>Makanan: <strong>${nama}</strong></p>
        <p>Jumlah Kalori: <strong>${jumlah} kkal</strong></p>
        <p><em>${saran}</em></p>
      `;
    });
  </script>

</body>
</html>
