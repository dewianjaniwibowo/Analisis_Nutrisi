<!DOCTYPE html>
<html>
<head>
    <title>Chat dengan <?= esc($nama_dokter) ?></title>
</head>
<body>
    <?php $id = 'dokter1'; ?>
    <h2>Chat dengan <?= esc($nama_dokter) ?></h2>
    <p>Halo! Silakan mulai konsultasi Anda di sini.</p>

    <!-- Chat Box Langsung -->
    <div class="chat-popup" id="chatBox<?= $id ?>">
      <div class="chat-header">
        Chat dengan <?= esc($nama_dokter) ?>
        <span class="close-chat" onclick="closeChat('chatBox<?= $id ?>')">✖️</span>
      </div>
      <div class="chat-body" id="chatBody<?= $id ?>"></div>
      <div class="chat-footer">
        <input type="text" id="chatInput<?= $id ?>" placeholder="Tulis pertanyaan Anda...">
        <button onclick="sendMessage('<?= $id ?>')">Kirim</button>
      </div>
    </div>

    <br>
    <a href="<?= base_url('konsultasi') ?>">← Kembali ke daftar dokter</a>

    <!-- CSS CHAT -->
    <style>
    .chat-popup {
      position: relative;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: white;
      width: 100%;
      max-width: 500px;
      margin: 20px 0;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      font-family: Arial, sans-serif;
    }
    .chat-header {
      padding: 10px;
      background: #4CAF50;
      color: white;
      font-weight: bold;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .chat-body {
      max-height: 200px;
      overflow-y: auto;
      padding: 10px;
    }
    .chat-message {
      margin: 5px 0;
    }
    .chat-message.user {
      text-align: right;
      color: #333;
    }
    .chat-message.bot {
      text-align: left;
      color: #4CAF50;
    }
    .chat-footer {
      display: flex;
      border-top: 1px solid #ccc;
    }
    .chat-footer input {
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 0 0 0 10px;
      outline: none;
    }
    .chat-footer button {
      background: #4CAF50;
      border: none;
      color: white;
      padding: 10px;
      border-radius: 0 0 10px 0;
      cursor: pointer;
    }
    .close-chat {
      float: right;
      cursor: pointer;
    }
    </style>

    <!-- JS CHAT -->
    <script>
    function closeChat(id) {
      document.getElementById(id).style.display = "none";
    }

    function sendMessage(id) {
      const input = document.getElementById(`chatInput${id}`);
      const body = document.getElementById(`chatBody${id}`);
      const msg = input.value.trim();
      if (msg === '') return;

      body.innerHTML += `<div class="chat-message user">${msg}</div>`;
      input.value = '';
      input.focus();
      body.scrollTop = body.scrollHeight;

      setTimeout(() => {
        const reply = `Hai, ini ${id.includes('dr') ? '' : 'dr. '}<?= esc($nama_dokter) ?>. Pertanyaan Anda akan segera dibalas.`;
        body.innerHTML += `<div class="chat-message bot">${reply}</div>`;
        body.scrollTop = body.scrollHeight;
      }, 800);
    }
    </script>
</body>

</html>
