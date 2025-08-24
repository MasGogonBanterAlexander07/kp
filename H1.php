<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CyberXplorer - Tools Portal</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
    body { font-family: 'Segoe UI', sans-serif; background: #0d1117; color: #fff; }
    header { background: #161b22; padding: 20px 0; position: sticky; top: 0; z-index: 10; }
    .container { width: 90%; margin: auto; display: flex; justify-content: space-between; align-items: center; }
    header h1 { color: #58a6ff; }
    nav a { color: #c9d1d9; margin-left: 20px; text-decoration: none; }
    nav a:hover { color: #58a6ff; }
    section { padding: 60px 20px; }
    .hero { height: 80vh; background: linear-gradient(#0d1117cc, #0d1117cc),  center/cover no-repeat; display: flex; align-items: center; justify-content: center; text-align: center; }
    .hero h2 { font-size: 3em; color: #58a6ff; margin-bottom: 10px; }
    .hero p { font-size: 1.2em; margin-bottom: 20px; }
    .btn { padding: 10px 20px; background: #238636; color: white; border-radius: 8px; text-decoration: none; }
    .btn:hover { background: #2ea043; }
    h2 { color: #58a6ff; margin-bottom: 20px; }
    .tools, .vote, .saran { max-width: 800px; margin: auto; }
    .tool-item { background: #161b22; padding: 15px; margin-bottom: 10px; border-radius: 8px; }
    input[type="text"], textarea, select { width: 100%; padding: 10px; margin-top: 10px; margin-bottom: 15px; border: none; border-radius: 6px; }
    button { padding: 10px 20px; border: none; background: #238636; color: white; border-radius: 6px; cursor: pointer; }
    button:hover { background: #2ea043; }
    footer { background: #161b22; text-align: center; padding: 20px; margin-top: 40px; font-size: 0.9em; }
  </style>
</head>
<body>

  <header>
    <div class="container">
      <h1>CyberXplorer</h1>
      <nav>
        <a href="#beranda">Beranda</a>
        <a href="#tentang">Tentang Kami</a>
        <a href="#tools">Tools</a>
        <a href="#vote">Pemilihan</a>
        <a href="#saran">Saran</a>
      </nav>
    </div>
  </header>

  <section id="beranda" class="hero">
    <div>
      <h2>Portal Tools Cyber</h2>
      <p>Gunakan tools seperti Kali Linux, Burp Suite, dan lainnya dengan mudah.</p>
      <a href="#tools" class="btn">Jelajahi Sekarang</a>
    </div>
  </section>

  <section id="tentang">
    <div class="tools">
      <h2>Tentang Kami</h2>
      <p>CyberXplorer adalah platform edukatif tentang tools cybersecurity seperti Kali Linux, Burp Suite, dan lainnya. Kami hadir untuk pelajar & komunitas digital.</p>
      <p>Website ini dibuat sebagai proyek belajar mandiri untuk menampilkan fitur dan tampilan modern dalam satu halaman.</p>
    </div>
  </section>

  <section id="tools">
    <div class="tools">
      <h2>Daftar Tools</h2>
      <div class="tool-item"><strong>Kali Linux</strong> – Sistem operasi untuk penetration testing</div>
      <div class="tool-item"><strong>Burp Suite</strong> – Platform testing keamanan web</div>
      <div class="tool-item"><strong>Wireshark</strong> – Analisis paket jaringan</div>
      <div class="tool-item"><strong>Nmap</strong> – Scanner jaringan dan port</div>
      <div class="tool-ite"><a href="tools.php"><button>TOOLS</button></a></div>
    </div>
  </section>

  <section id="vote">
    <div class="vote">
      <h2>Pemilihan Tools Favorit</h2>
      <form onsubmit="voteSubmit(event)">
        <label for="pilih">Pilih tool favoritmu:</label>
        <select id="pilih" required>
          <option value="">-- Pilih --</option>
          <option value="Kali Linux">Kali Linux</option>
          <option value="Burp Suite">Burp Suite</option>
          <option value="Wireshark">Wireshark</option>
          <option value="Nmap">Nmap</option>
        </select>
        <button type="submit">Kirim</button>
      </form>
    </div>
  </section>

  <section id="saran">
    <div class="saran">
      <h2>Kritik & Saran</h2>
      <form onsubmit="saranSubmit(event)">
        <input type="text" placeholder="Nama kamu..." required />
        <input type="text" placeholder="Email kamu" required />
        <input type="text" placeholder="Password" required />
        <textarea rows="5" placeholder="Masukkan saran kamu..." required></textarea>
        <button type="submit">Kirim</button>
      </form>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Kang Steam07. All rights reserved.</p>
  </footer>

  <script>
    function voteSubmit(e) {
      e.preventDefault();
      const tool = document.getElementById("pilih").value;
      alert("Terima kasih sudah memilih: " + tool);
    }
    function saranSubmit(e) {
      e.preventDefault();
      alert("Terima kasih atas saranmu!");
    }
  </script>

</body>
</html>