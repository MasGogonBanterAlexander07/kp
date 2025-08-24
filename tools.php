<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cyber Xplorer</title>
  <style></style>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#fdf5ed] text-gray-800 font-sans">
  
  <!-- Navbar -->
  <nav class="bg-white shadow p-4 flex justify-between items-center">
    <div class="text-xl font-bold text-orange-600">🍳 Jago Resep</div>
    <ul class="flex space-x-4 text-sm font-semibold">
      <li><a href="H1.php" class="text-white bg-orange-600 px-3 py-1 rounded">Beranda</a></li>
      <li><a href="#" class="text-white bg-orange-600 px-3 py-1 rounded">Tools</a></li>
      <li><a href="#" class="text-white bg-orange-600 px-3 py-1 rounded">Quiz</a></li>
    </ul>
  </nav>

  <!-- Pencarian -->
  <section class="text-center mt-10 mb-8">
    <h2 class="text-2xl font-bold mb-4">Cari Tools</h2>
    <div class="flex justify-center gap-2 flex-wrap">
      <input id="searchInput" type="text" placeholder="Masukkan nama makanan" 
             class="border rounded px-4 py-2 w-64" oninput="filterResep()" />
      <select id="categorySelect" class="border rounded px-4 py-2" onchange="filterResep()">
        <option value="">Semua Kategori</option>
        <option value="makanan penutup">Makanan Penutup</option>
        <option value="makanan pembuka">Makanan Pembuka</option>
        <option value="makanan utama">Makanan Utama</option>
        <option value="minuman">Minuman</option>
      </select>
      <button onclick="resetFilter()" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">Reset</button>
    </div>
  </section>

  <!-- Daftar Resep -->
  <section class="px-8">
    <h3 id="categoryTitle" class="text-xl font-semibold mb-4">Semua Resep</h3>
    <div id="resepList" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Resep 1 -->
      <a href="Nmap.php">
        <div class="resep-card cursor-pointer bg-white rounded shadow hover:shadow-lg transition" 
        data-nama="puding lumut" data-kategori="makanan penutup"
        onclick="bukaResep('puding-lumut.html')">
        <div class="relative">
          <img src="Nmap-1024x535.png" alt="Puding Lumut" class="w-full h-48 object-cover rounded-t">
        </div>
        <div class="p-4">
          <h4 class="font-bold">PUDING LUMUT</h4>
          <p class="text-sm text-gray-500">Makanan Penutup</p>
        </div>
      </div>
    </a>

      <!-- Resep 2 -->
      <div class="resep-card cursor-pointer bg-white rounded shadow hover:shadow-lg transition" 
           data-nama="mochi brownie" data-kategori="makanan penutup"
           onclick="bukaResep('mochi-brownie.html')">
        <div class="relative">
          <img src="https://i.ibb.co/B6B2sNK/mochi-brownie.jpg" alt="Mochi Brownie" class="w-full h-48 object-cover rounded-t">
        </div>
        <div class="p-4">
          <h4 class="font-bold">Mochi Brownie</h4>
          <p class="text-sm text-gray-500">Makanan Penutup</p>
        </div>
      </div>

      <!-- Resep 3 -->
      <div class="resep-card cursor-pointer bg-white rounded shadow hover:shadow-lg transition" 
           data-nama="blueberry crumble cheesecake" data-kategori="makanan penutup"
           onclick="bukaResep('blueberry-cheesecake.html')">
        <div class="relative">
          <img src="https://i.ibb.co/6F5pPYH/blueberry.jpg" alt="Blueberry Cheesecake" class="w-full h-48 object-cover rounded-t">
          <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">Resep Teruji</span>
        </div>
        <div class="p-4">
          <h4 class="font-bold">BLUEBERRY CRUMBLE CHEESECAKE</h4>
          <p class="text-sm text-gray-500">Makanan Penutup</p>
        </div>
      </div>

      <!-- Resep 4 (Kategori: Makanan Utama) -->
      <div class="resep-card cursor-pointer bg-white rounded shadow hover:shadow-lg transition" 
           data-nama="nasi goreng spesial" data-kategori="makanan utama"
           onclick="bukaResep('nasi-goreng.html')">
        <div class="relative">
          <img src="https://i.ibb.co/6W0hS6w/nasi-goreng.jpg" alt="Nasi Goreng" class="w-full h-48 object-cover rounded-t">
          <span class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded">Favorit</span>
        </div>
        <div class="p-4">
          <h4 class="font-bold">Nasi Goreng Spesial</h4>
          <p class="text-sm text-gray-500">Makanan Utama</p>
        </div>
      </div>

      <!-- Resep 5 (Kategori: Minuman) -->
      <div class="resep-card cursor-pointer bg-white rounded shadow hover:shadow-lg transition" 
           data-nama="es teh manis" data-kategori="minuman"
           onclick="bukaResep('es-teh-manis.html')">
        <div class="relative">
          <img src="https://i.ibb.co/6bHkSRN/es-teh.jpg" alt="Es Teh Manis" class="w-full h-48 object-cover rounded-t">
          <span class="absolute top-2 left-2 bg-blue-500 text-white text-xs px-2 py-1 rounded">Segar</span>
        </div>
        <div class="p-4">
          <h4 class="font-bold">Es Teh Manis</h4>
          <p class="text-sm text-gray-500">Minuman</p>
        </div>
      </div>

    </div>

    <!-- Pesan jika tidak ada hasil -->
    <p id="noResultMessage" class="hidden text-center text-gray-500 text-lg mt-6">
      Tidak ada hasil ditemukan untuk pencarian atau kategori ini.
    </p>
  </section>

  <!-- Footer -->
  <footer class="text-center text-sm text-gray-500 mt-10 py-6">
    © 2025 Kang Steam07. All rights reserved.
  </footer>

  <!-- Script JS -->
  <script>
    function filterResep() {
      const input = document.getElementById('searchInput').value.toLowerCase();
      const selectedCategory = document.getElementById('categorySelect').value.toLowerCase();
      const cards = document.querySelectorAll('.resep-card');
      const categoryTitle = document.getElementById('categoryTitle');
      const noResultMessage = document.getElementById('noResultMessage');
      
      // Ubah judul kategori
      categoryTitle.textContent = selectedCategory === "" 
        ? "Semua Resep" 
        : "Kategori: " + capitalizeFirstLetter(selectedCategory);

      // Filter resep
      let visibleCount = 0;
      cards.forEach(card => {
        const nama = card.getAttribute('data-nama');
        const kategori = card.getAttribute('data-kategori');
        
        const cocokNama = nama.includes(input) || input === "";
        const cocokKategori = kategori.includes(selectedCategory) || selectedCategory === "";

        if (cocokNama && cocokKategori) {
          card.style.display = 'block';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      // Tampilkan pesan jika tidak ada hasil
      noResultMessage.classList.toggle('hidden', visibleCount > 0);
    }

    function resetFilter() {
      document.getElementById('searchInput').value = "";
      document.getElementById('categorySelect').value = "";
      filterResep();
    }

    function capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }

    function bukaResep(link) {
      window.location.href = link;
    }
  </script>

</body>
</html>