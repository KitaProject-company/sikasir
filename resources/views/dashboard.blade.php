<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Halaman Produk Toko</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans p-4">

  <!-- Header -->
  <div class="flex justify-between items-start p-2 border rounded-lg mb-6 relative">

     <input
      type="text"
      id="searchInput"
      placeholder="Cari produk..."
      class="m-1     p-1 w-1/3 border border-gray-300 rounded"
      />

    <!-- Keranjang -->
    <div class="absolute top-4 right-4">
      <div id="cart" class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-sm font-bold">
        0
      </div>
    </div>
  </div>

   <!-- Iklan Produk -->
<div class="mb-6">
  <div class="relative overflow-hidden rounded-lg shadow-lg">
    <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
      <img src="{{ asset('img/iklan/pexels-karolina-grabowska-5632378.jpg') }}" style="height: 300px;" class="w-full flex-shrink-0" alt="Iklan 1" />
      <img src="{{ asset('img/iklan/pexels-max-fischer-5872364.jpg')}}" style="height: 300px;" class="w-full flex-shrink-0" alt="Iklan 2" />
      <img src="{{ asset('img/iklan/pexels-tima-miroshnichenko-5912621.jpg')}}" style="height: 300px;" class="w-full flex-shrink-0" alt="Iklan 3" />
    </div>

    <!-- Tombol Navigasi -->
    <button onclick="prevSlide()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 px-2 py-1 rounded-full shadow hover:bg-white">
      ◀
    </button>
    <button onclick="nextSlide()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 px-2 py-1 rounded-full shadow hover:bg-white">
      ▶
    </button>
  </div>
</div>

  <!-- Filter Kategori -->
  <div class="flex justify-around mb-6">
    <div class="w-16 h-16 bg-blue-300 rounded-full flex items-center justify-center">A</div>
    <div class="w-16 h-16 bg-green-300 rounded-full flex items-center justify-center">B</div>
    <div class="w-16 h-16 bg-red-300 rounded-full flex items-center justify-center">C</div>
    <div class="w-16 h-16 bg-purple-300 rounded-full flex items-center justify-center">D</div>
  </div>

  <!-- Daftar Produk -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <!-- Produk 1 -->
    <div onclick="addToCart()" class="cursor-pointer border rounded-lg p-4 flex flex-col items-center hover:bg-gray-100">
      <div class="w-24 h-24 bg-gray-300 rounded-full mb-2"></div>
      <div class="w-full h-4 bg-gray-400 rounded"></div>
    </div>
    <!-- Produk 2 -->
    <div onclick="addToCart()" class="cursor-pointer border rounded-lg p-4 flex flex-col items-center hover:bg-gray-100">
      <div class="w-24 h-24 bg-gray-300 rounded-full mb-2"></div>
      <div class="w-full h-4 bg-gray-400 rounded"></div>
    </div>
    <!-- Produk 3 -->
    <div onclick="addToCart()" class="cursor-pointer border rounded-lg p-4 flex flex-col items-center hover:bg-gray-100">
      <div class="w-24 h-24 bg-gray-300 rounded-full mb-2"></div>
      <div class="w-full h-4 bg-gray-400 rounded"></div>
    </div>
  </div>

  <script>
    //   Script untuk simulasi keranjang
    let cartCount = 0;
    function addToCart() {
      cartCount++;
      document.getElementById('cart').textContent = cartCount;
    }

    // Script untuk iklan
    const carousel = document.getElementById('carousel');
  let index = 0;
  const totalSlides = carousel.children.length;

  function showSlide(i) {
    carousel.style.transform = `translateX(-${i * 100}%)`;
  }

  function nextSlide() {
    index = (index + 1) % totalSlides;
    showSlide(index);
  }

  function prevSlide() {
    index = (index - 1 + totalSlides) % totalSlides;
    showSlide(index);
  }

  // Auto-slide setiap 5 detik
  setInterval(() => {
    nextSlide();
  }, 5000);
  </script>

</body>
</html>
