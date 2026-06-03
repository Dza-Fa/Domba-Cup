<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domba Cup - Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300..800&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'sans-serif'] },
          colors: {
            brand: { red: '#ff3a1a', yellow: '#ffd600' },
            dark: { 900: '#111111', 800: '#1a1a1a', 700: '#2a2a2a' }
          }
        }
      }
    }
  </script>
  <style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  </style>
</head>
<body class="bg-dark-900 text-white font-sans antialiased">
  <header class="bg-dark-900 border-b border-white/10 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-20 h-20 flex items-center justify-between">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <a href="./index.php" class="flex items-center gap-3 hover:opacity-80 transition-opacity">
        <img src="./assets/registration/14_2704.svg" alt="Logo" class="w-8 h-8">
        <span class="text-white font-light tracking-wider text-lg">DOMBA CUP</span>
      </a>
    </div>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center gap-8">
      <a href="./index.php" class="text-white text-sm font-light">BERANDA</a>
      <a href="#" class="text-gray-400 hover:text-white text-sm font-light transition-colors">KATEGORI</a>
      <a href="#" class="text-gray-400 hover:text-white text-sm font-light transition-colors">JADWAL</a>
      <a href="./ticket.php" class="text-gray-400 hover:text-white text-sm font-light transition-colors">TIKET</a>
    </nav>

    <!-- CTA Button -->
    <a href="./registration.php" class="bg-brand-red hover:bg-red-600 text-white px-6 py-2.5 rounded text-sm shadow-[4px_4px_0px_0px_#ffd600] transition-all active:translate-y-1 active:shadow-[0px_0px_0px_0px_#ffd600] inline-block">
      DAFTAR TIM
    </a>
    <!-- Mobile menu toggle -->
    <button id="mobile-menu-btn-reg" class="md:hidden text-white text-2xl ml-3" aria-label="Menu">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
</header>
  <nav id="mobile-nav-reg" class="hidden md:hidden absolute top-full left-0 w-full bg-dark-800 border-b border-white/10 p-4 space-y-3 z-40">
    <a href="./index.php" class="block text-white text-sm">BERANDA</a>
    <a href="#" class="block text-gray-400 text-sm">KATEGORI</a>
    <a href="#" class="block text-gray-400 text-sm">JADWAL</a>
    <a href="./ticket.php" class="block text-gray-400 text-sm">TIKET</a>
    <a href="./registration.php" class="block bg-brand-red text-white px-4 py-2 rounded text-sm text-center">DAFTAR TIM</a>
  </nav>
  <section class="relative bg-dark-900 pt-16 pb-24 overflow-hidden">
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0 z-0">
    <img src="./assets/shared/a433aebcb4e5ada26ad36b716e8c87c610dad4f8.png" alt="Stadium" class="w-full h-full object-cover opacity-20">
    <div class="absolute inset-0 bg-gradient-to-b from-dark-900/60 via-dark-900/85 to-dark-900"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-20 flex flex-col items-center text-center">
    <!-- Badge -->
    <div class="inline-flex items-center gap-2 bg-brand-red/20 border border-brand-red/50 rounded-full px-5 py-2 mb-8">
      <div class="w-2 h-2 rounded-full bg-brand-red"></div>
      <span class="text-brand-yellow text-sm font-light tracking-wide">BATAS PENDAFTARAN: 31 JULI 2025</span>
    </div>

    <!-- Title -->
    <h1 class="text-5xl md:text-7xl font-light mb-6 bg-gradient-to-b from-brand-yellow to-brand-red text-transparent bg-clip-text drop-shadow-lg">
      DAFTAR TIM
    </h1>

    <!-- Subtitle -->
    <div class="flex items-center gap-4 mb-6">
      <div class="h-px w-16 bg-brand-red/60"></div>
      <img src="./assets/registration/14_1964.svg" alt="Icon" class="w-5 h-5">
      <div class="h-px w-16 bg-brand-red/60"></div>
    </div>
    <p class="text-white text-xl md:text-2xl font-light mb-2">Jadikan timmu bagian dari <span class="text-brand-yellow">Domba Cup 2025.</span></p>
    <p class="text-gray-400 text-base md:text-lg mb-12">Slot terbatas â€” daftar sekarang dan buktikan dominasi timmu di lapangan!</p>

    <!-- Stats Box -->
    <div class="bg-dark-800/80 backdrop-blur-md border border-white/10 rounded-xl p-6 md:p-8 flex flex-wrap justify-center gap-8 md:gap-16 shadow-2xl">
      <div class="text-center">
        <p class="text-brand-red text-3xl md:text-4xl font-light mb-1">32</p>
        <p class="text-gray-400 text-xs md:text-sm uppercase tracking-wider">Total Slot</p>
      </div>
      <div class="w-px h-12 bg-white/10 hidden md:block"></div>
      <div class="text-center">
        <p class="text-brand-yellow text-3xl md:text-4xl font-light mb-1">18</p>
        <p class="text-gray-400 text-xs md:text-sm uppercase tracking-wider">Tersisa</p>
      </div>
      <div class="w-px h-12 bg-white/10 hidden md:block"></div>
      <div class="text-center">
        <p class="text-white text-3xl md:text-4xl font-light mb-1">3</p>
        <p class="text-gray-400 text-xs md:text-sm uppercase tracking-wider">Kategori</p>
      </div>
      <div class="w-px h-12 bg-white/10 hidden md:block"></div>
      <div class="text-center">
        <p class="text-brand-yellow text-3xl md:text-4xl font-light mb-1 flex items-baseline justify-center gap-1">50<span class="text-xl">jt</span></p>
        <p class="text-gray-400 text-xs md:text-sm uppercase tracking-wider">Total Hadiah</p>
      </div>
    </div>
  </div>
</section>
  <section class="bg-dark-900 py-12">
  <div class="max-w-7xl mx-auto px-6 lg:px-20">
    <!-- Section Header -->
    <div class="mb-8">
      <p class="text-brand-red text-sm font-light tracking-wider mb-1 uppercase">Langkah Pertama</p>
      <h2 class="text-3xl font-light text-white">PILIH <span class="text-brand-yellow">KATEGORI</span></h2>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Active Card (U-17) -->
      <div class="relative bg-brand-red/10 border-2 border-brand-red rounded-xl p-6 shadow-[4px_4px_0px_0px_#ffd600] overflow-hidden cursor-pointer transition-transform hover:-translate-y-1">
        <div class="absolute top-4 right-4 bg-brand-red text-white text-[10px] font-light px-2 py-1 rounded uppercase">Populer</div>
        <div class="absolute inset-0 bg-gradient-to-br from-transparent to-brand-red/5 pointer-events-none"></div>
        
        <div class="flex items-center gap-4 mb-6 relative z-10">
          <div class="w-12 h-12 bg-brand-red/20 border border-brand-red/50 rounded-lg flex items-center justify-center">
            <img src="./assets/registration/14_2017.svg" alt="U-17" class="w-6 h-6">
          </div>
          <div>
            <h3 class="text-white font-light text-xl">U-17</h3>
            <p class="text-gray-400 text-sm">Under 17 Tahun</p>
          </div>
        </div>
        
        <div class="mb-6 relative z-10">
          <p class="text-brand-yellow text-3xl font-light flex items-baseline gap-1">Rp 250.000 <span class="text-gray-400 text-sm font-normal">/ tim</span></p>
        </div>
        
        <ul class="space-y-3 mb-8 relative z-10">
          <li class="flex items-start gap-3 text-gray-300 text-sm">
            <img src="./assets/registration/14_2030.svg" alt="check" class="w-4 h-4 mt-0.5">
            Maks. 22 pemain per tim
          </li>
          <li class="flex items-start gap-3 text-gray-300 text-sm">
            <img src="./assets/registration/14_2036.svg" alt="check" class="w-4 h-4 mt-0.5">
            Jersey tim resmi turnamen
          </li>
          <li class="flex items-start gap-3 text-gray-300 text-sm">
            <img src="./assets/registration/14_2042.svg" alt="check" class="w-4 h-4 mt-0.5">
            Kartu pemain digital
          </li>
          <li class="flex items-start gap-3 text-gray-300 text-sm">
            <img src="./assets/registration/14_2048.svg" alt="check" class="w-4 h-4 mt-0.5">
            Sertifikat partisipasi
          </li>
        </ul>
        
        <div class="pt-4 border-t border-white/10 flex items-center justify-between relative z-10">
          <p class="text-gray-400 text-xs">Usia: < 17 tahun per 1 Jan 2025</p>
          <div class="w-6 h-6 bg-brand-red rounded-full flex items-center justify-center">
            <img src="./assets/registration/14_2057.svg" alt="selected" class="w-3 h-3">
          </div>
        </div>
      </div>

      <!-- Inactive Card (Dewasa) -->
      <div class="bg-dark-800 border border-white/10 rounded-xl p-6 hover:border-white/30 transition-all cursor-pointer">
        <div class="flex items-center gap-4 mb-6">
          <div class="w-12 h-12 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center">
            <img src="./assets/registration/14_2065.svg" alt="Dewasa" class="w-6 h-6 opacity-50">
          </div>
          <div>
            <h3 class="text-white font-light text-xl">Dewasa</h3>
            <p class="text-gray-400 text-sm">Open / Umum</p>
          </div>
        </div>
        
        <div class="mb-6">
          <p class="text-gray-300 text-3xl font-light flex items-baseline gap-1">Rp 350.000 <span class="text-gray-500 text-sm font-normal">/ tim</span></p>
        </div>
        
        <ul class="space-y-3 mb-8">
          <li class="flex items-start gap-3 text-gray-400 text-sm">
            <img src="./assets/registration/14_2078.svg" alt="check" class="w-4 h-4 mt-0.5 opacity-50">
            Maks. 22 pemain per tim
          </li>
          <li class="flex items-start gap-3 text-gray-400 text-sm">
            <img src="./assets/registration/14_2084.svg" alt="check" class="w-4 h-4 mt-0.5 opacity-50">
            Jersey tim resmi turnamen
          </li>
          <li class="flex items-start gap-3 text-gray-400 text-sm">
            <img src="./assets/registration/14_2090.svg" alt="check" class="w-4 h-4 mt-0.5 opacity-50">
            Kartu pemain digital
          </li>
          <li class="flex items-start gap-3 text-gray-400 text-sm">
            <img src="./assets/registration/14_2096.svg" alt="check" class="w-4 h-4 mt-0.5 opacity-50">
            Akses media & livestream
          </li>
        </ul>
        
        <div class="pt-4 border-t border-white/10 flex items-center justify-between">
          <p class="text-gray-500 text-xs">Usia: 17+ tahun, open</p>
          <div class="w-6 h-6 bg-white/10 border border-white/20 rounded-full"></div>
        </div>
      </div>

      <!-- Inactive Card (Veteran) -->
      <div class="bg-dark-800 border border-white/10 rounded-xl p-6 hover:border-white/30 transition-all cursor-pointer">
        <div class="flex items-center gap-4 mb-6">
          <div class="w-12 h-12 bg-white/5 border border-white/10 rounded-lg flex items-center justify-center">
            <img src="./assets/registration/14_2113.svg" alt="Veteran" class="w-6 h-6 opacity-50">
          </div>
          <div>
            <h3 class="text-white font-light text-xl">Veteran</h3>
            <p class="text-gray-400 text-sm">35+ Tahun</p>
          </div>
        </div>
        
        <div class="mb-6">
          <p class="text-gray-300 text-3xl font-light flex items-baseline gap-1">Rp 300.000 <span class="text-gray-500 text-sm font-normal">/ tim</span></p>
        </div>
        
        <ul class="space-y-3 mb-8">
          <li class="flex items-start gap-3 text-gray-400 text-sm">
            <img src="./assets/registration/14_2126.svg" alt="check" class="w-4 h-4 mt-0.5 opacity-50">
            Maks. 22 pemain per tim
          </li>
          <li class="flex items-start gap-3 text-gray-400 text-sm">
            <img src="./assets/registration/14_2132.svg" alt="check" class="w-4 h-4 mt-0.5 opacity-50">
            Jersey tim resmi turnamen
          </li>
          <li class="flex items-start gap-3 text-gray-400 text-sm">
            <img src="./assets/registration/14_2138.svg" alt="check" class="w-4 h-4 mt-0.5 opacity-50">
            Kartu pemain digital
          </li>
          <li class="flex items-start gap-3 text-gray-400 text-sm">
            <img src="./assets/registration/14_2144.svg" alt="check" class="w-4 h-4 mt-0.5 opacity-50">
            Trophy & penghargaan khusus
          </li>
        </ul>
        
        <div class="pt-4 border-t border-white/10 flex items-center justify-between">
          <p class="text-gray-500 text-xs">Usia: Min. 35 tahun per 1 Jan 2025</p>
          <div class="w-6 h-6 bg-white/10 border border-white/20 rounded-full"></div>
        </div>
      </div>
    </div>
  </div>
</section>
  <section class="bg-dark-900 py-12">
  <div class="max-w-7xl mx-auto px-6 lg:px-20">
    <!-- Section Header -->
    <div class="mb-12">
      <p class="text-brand-red text-sm font-light tracking-wider mb-1 uppercase">Formulir Pendaftaran</p>
      <h2 class="text-3xl font-light text-white">ISI <span class="text-brand-yellow">DATA TIM</span></h2>
    </div>

    <!-- Stepper -->
    <div class="bg-dark-800/80 border border-white/10 rounded-xl p-6 mb-8 overflow-x-auto no-scrollbar">
      <div class="flex items-center justify-between min-w-[600px] relative">
        <!-- Connecting Lines -->
        <div class="absolute top-5 left-10 right-10 h-0.5 bg-dark-700 z-0"></div>
        <div class="absolute top-5 left-10 w-1/4 h-0.5 bg-brand-red z-0"></div>

        <!-- Step 1 -->
        <div class="relative z-10 flex flex-col items-center gap-3 w-1/4">
          <div class="w-10 h-10 rounded-full bg-brand-red border-2 border-brand-yellow flex items-center justify-center shadow-[0_0_12px_rgba(255,58,26,0.6)]">
            <span class="text-white font-light">1</span>
          </div>
          <div class="text-center">
            <p class="text-white text-sm font-light">Info Tim</p>
            <p class="text-brand-red text-xs mt-1">Aktif</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="relative z-10 flex flex-col items-center gap-3 w-1/4">
          <div class="w-10 h-10 rounded-full bg-dark-700 border-2 border-white/15 flex items-center justify-center">
            <span class="text-gray-400 font-light">2</span>
          </div>
          <div class="text-center">
            <p class="text-gray-500 text-sm font-light">Data Pemain</p>
            <p class="text-gray-600 text-xs mt-1">Menunggu</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="relative z-10 flex flex-col items-center gap-3 w-1/4">
          <div class="w-10 h-10 rounded-full bg-dark-700 border-2 border-white/15 flex items-center justify-center">
            <span class="text-gray-400 font-light">3</span>
          </div>
          <div class="text-center">
            <p class="text-gray-500 text-sm font-light">Upload Dokumen</p>
            <p class="text-gray-600 text-xs mt-1">Menunggu</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="relative z-10 flex flex-col items-center gap-3 w-1/4">
          <div class="w-10 h-10 rounded-full bg-dark-700 border-2 border-white/15 flex items-center justify-center">
            <span class="text-gray-400 font-light">4</span>
          </div>
          <div class="text-center">
            <p class="text-gray-500 text-sm font-light">Pembayaran</p>
            <p class="text-gray-600 text-xs mt-1">Menunggu</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Form Content Area -->
    <div class="bg-dark-800/80 border border-white/10 rounded-xl p-6 md:p-10">
      
      <!-- Step 1 Header -->
      <div class="flex items-center gap-4 mb-8 pb-4 border-b border-white/10">
        <div class="w-8 h-8 bg-brand-red rounded flex items-center justify-center">
          <img src="./assets/registration/14_2199.svg" alt="icon" class="w-4 h-4">
        </div>
        <div>
          <h3 class="text-white font-light text-lg">Step 1 â€” Info Tim</h3>
          <p class="text-gray-400 text-sm">Masukkan informasi dasar tim kamu</p>
        </div>
      </div>

      <!-- Form Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Nama Tim (fixed malformed tag) -->
        <div class="col-span-1 md:col-span-2">
          <label class="block text-white/90 text-sm font-medium mb-2">Nama Tim <span class="text-brand-red">*</span></label>
          <input type="text" id="reg-team-name" value="Garuda FC Bandung" class="w-full rounded-lg border border-white/10 bg-dark-700 px-4 py-3 text-white placeholder:text-gray-500 focus:border-brand-red focus:outline-none">
        </div>

        <!-- Asal Kota -->
        <div>
          <label class="block text-white/90 text-sm font-medium mb-2">Asal Kota <span class="text-brand-red">*</span></label>
          <input type="text" id="reg-origin" value="Bandung, Jawa Barat" class="w-full rounded-lg border border-white/10 bg-dark-700 px-4 py-3 text-white placeholder:text-gray-500 focus:border-brand-red focus:outline-none">
        </div>

        <!-- Kategori (Readonly/Select) -->
        <div>
          <label class="block text-white/90 text-sm font-medium mb-2">Kategori <span class="text-brand-red">*</span></label>
          <select id="reg-category" class="w-full rounded-lg border border-white/10 bg-dark-700 px-4 py-3 text-white focus:border-brand-red focus:outline-none">
            <option value="U-17">U-17 — Rp 250.000</option>
            <option value="Dewasa">Dewasa — Rp 350.000</option>
            <option value="Veteran">Veteran — Rp 300.000</option>
          </select>
        </div>

        <!-- Nama Ketua -->
        <div>
          <label class="block text-white/90 text-sm font-medium mb-2">Nama Ketua Tim <span class="text-brand-red">*</span></label>
          <input type="text" id="reg-captain-name" value="Ahmad Reza Pratama" class="w-full rounded-lg border border-white/10 bg-dark-700 px-4 py-3 text-white placeholder:text-gray-500 focus:border-brand-red focus:outline-none">
        </div>

        <!-- No HP -->
        <div>
          <label class="block text-white/90 text-sm font-medium mb-2">No. HP Ketua <span class="text-brand-red">*</span></label>
          <div class="flex">
            <div class="rounded-l-lg border border-r-0 border-white/10 bg-dark-700 px-4 py-3 flex items-center gap-2">
              <span class="text-gray-400 text-sm">+62</span>
            </div>
            <input type="tel" id="reg-captain-phone" value="812 3456 7890" class="w-full rounded-r-lg border border-white/10 bg-dark-700 px-4 py-3 text-white placeholder:text-gray-500 focus:border-brand-red focus:outline-none">
          </div>
        </div>

        <!-- Email -->
        <div class="col-span-1 md:col-span-2">
          <label class="block text-white/90 text-sm font-medium mb-2">Email Tim <span class="text-brand-red">*</span></label>
          <input type="email" id="reg-captain-email" value="garudafc.bdg@gmail.com" class="w-full rounded-lg border border-white/10 bg-dark-700 px-4 py-3 text-white placeholder:text-gray-500 focus:border-brand-red focus:outline-none">
        </div>
      </div>

      <!-- Player Count Slider -->
      <div class="mb-10">
        <label class="block text-white text-sm mb-4">Jumlah Pemain Terdaftar <span class="text-brand-red">*</span></label>
        <div class="flex items-center gap-4">
          <button id="player-minus" class="w-12 h-12 bg-dark-700 border border-white/10 rounded flex items-center justify-center hover:bg-dark-600 transition">
            <img src="./assets/registration/14_2256.svg" alt="minus" class="w-4 h-4">
          </button>
          
          <div class="flex-1 bg-dark-700 border border-white/10 rounded h-12 flex items-center justify-center relative">
            <span id="player-count-display" class="text-white font-light text-lg">16</span>
            <!-- Progress Bar -->
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-dark-900 rounded-b">
              <div id="player-progress-bar" class="h-full bg-gradient-to-r from-brand-red to-brand-yellow rounded-b" style="width: 65%;"></div>
            </div>
          </div>
          
          <button id="player-plus" class="w-12 h-12 bg-dark-700 border border-white/10 rounded flex items-center justify-center hover:bg-dark-600 transition">
            <img src="./assets/registration/14_2262.svg" alt="plus" class="w-4 h-4">
          </button>
          
          <div class="hidden md:block text-gray-500 text-sm ml-4">
            Min 11 â€” Maks 22 pemain
          </div>
        </div>
        <div class="flex justify-between text-xs text-gray-500 mt-2 md:hidden">
          <span>11 (min)</span>
          <span class="text-brand-yellow">16 terdaftar</span>
          <span>22 (maks)</span>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="flex flex-col sm:flex-row justify-end gap-4 pt-6 border-t border-white/10">
        <button id="submit-registration" type="button" class="bg-brand-red hover:bg-red-600 text-white px-8 py-3 rounded font-light flex items-center justify-center gap-2 transition-colors">
          Kirim Pendaftaran
          <img src="./assets/registration/14_2279.svg" alt="arrow" class="w-4 h-4 rotate-90">
        </button>
      </div>
      <div id="registration-feedback" class="hidden text-sm mt-2"></div>
    </div>
  </div>
</section>
  <section class="bg-dark-900 py-12">
  <div class="max-w-4xl mx-auto px-6 lg:px-20">
    <!-- Section Header -->
    <div class="mb-8 text-center">
      <p class="text-brand-yellow text-sm font-light tracking-wider mb-1 uppercase">Wajib Dibaca</p>
      <h2 class="text-3xl font-light text-white">SYARAT & <span class="text-brand-red">KETENTUAN</span></h2>
    </div>

    <!-- Accordion -->
    <div class="space-y-4">
      <!-- Item 1 (Open) -->
      <div class="bg-brand-red/10 border border-brand-red/50 rounded-lg overflow-hidden">
        <div class="flex items-center gap-4 p-5 cursor-pointer">
          <span class="text-brand-red font-light text-lg">01</span>
          <h3 class="text-white font-light flex-1">Persyaratan Pendaftaran Tim</h3>
          <img src="./assets/registration/14_1858.svg" alt="up" class="w-4 h-4">
        </div>
        <div class="px-5 pb-5 pl-14 space-y-3">
          <p class="text-gray-400 text-sm flex items-start gap-2">
            <span class="text-brand-red mt-1">â€¢</span> Setiap tim wajib mendaftarkan minimum 11 pemain dan maksimum 22 pemain.
          </p>
          <p class="text-gray-400 text-sm flex items-start gap-2">
            <span class="text-brand-red mt-1">â€¢</span> Pemain harus memenuhi syarat usia sesuai kategori yang dipilih.
          </p>
          <p class="text-gray-400 text-sm flex items-start gap-2">
            <span class="text-brand-red mt-1">â€¢</span> Satu pemain hanya boleh terdaftar di satu tim dalam satu kategori.
          </p>
          <p class="text-gray-400 text-sm flex items-start gap-2">
            <span class="text-brand-red mt-1">â€¢</span> Ketua tim bertanggung jawab atas kebenaran data yang diinputkan.
          </p>
          <p class="text-gray-400 text-sm flex items-start gap-2">
            <span class="text-brand-red mt-1">â€¢</span> Panitia berhak mendiskualifikasi tim yang terbukti menggunakan data palsu.
          </p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="bg-dark-800 border border-white/10 rounded-lg p-5 flex items-center gap-4 cursor-pointer hover:bg-dark-700 transition-colors">
        <span class="text-gray-500 font-light text-lg">02</span>
        <h3 class="text-gray-300 font-light flex-1">Ketentuan Biaya & Pembayaran</h3>
        <img src="./assets/registration/14_1895.svg" alt="down" class="w-4 h-4 opacity-50">
      </div>

      <!-- Item 3 -->
      <div class="bg-dark-800 border border-white/10 rounded-lg p-5 flex items-center gap-4 cursor-pointer hover:bg-dark-700 transition-colors">
        <span class="text-gray-500 font-light text-lg">03</span>
        <h3 class="text-gray-300 font-light flex-1">Peraturan Pertandingan</h3>
        <img src="./assets/registration/14_1905.svg" alt="down" class="w-4 h-4 opacity-50">
      </div>

      <!-- Item 4 -->
      <div class="bg-dark-800 border border-white/10 rounded-lg p-5 flex items-center gap-4 cursor-pointer hover:bg-dark-700 transition-colors">
        <span class="text-gray-500 font-light text-lg">04</span>
        <h3 class="text-gray-300 font-light flex-1">Kode Etik & Sportivitas</h3>
        <img src="./assets/registration/14_1915.svg" alt="down" class="w-4 h-4 opacity-50">
      </div>

      <!-- Item 5 -->
      <div class="bg-dark-800 border border-white/10 rounded-lg p-5 flex items-center gap-4 cursor-pointer hover:bg-dark-700 transition-colors">
        <span class="text-gray-500 font-light text-lg">05</span>
        <h3 class="text-gray-300 font-light flex-1">Kebijakan Pembatalan & Pengembalian Dana</h3>
        <img src="./assets/registration/14_1925.svg" alt="down" class="w-4 h-4 opacity-50">
      </div>

      <!-- Item 6 -->
      <div class="bg-dark-800 border border-white/10 rounded-lg p-5 flex items-center gap-4 cursor-pointer hover:bg-dark-700 transition-colors">
        <span class="text-gray-500 font-light text-lg">06</span>
        <h3 class="text-gray-300 font-light flex-1">Penggunaan Foto & Video</h3>
        <img src="./assets/registration/14_1935.svg" alt="down" class="w-4 h-4 opacity-50">
      </div>
    </div>

    <!-- Agreement Checkbox -->
    <div class="mt-8 bg-dark-800/60 border border-white/10 rounded-lg p-5 flex items-start gap-4">
      <div class="w-5 h-5 mt-0.5 bg-brand-red/20 border-2 border-brand-red rounded flex items-center justify-center shrink-0 cursor-pointer">
        <img src="./assets/registration/14_1941.svg" alt="check" class="w-3 h-3">
      </div>
      <p class="text-gray-300 text-sm leading-relaxed">
        Saya telah membaca, memahami, dan menyetujui seluruh Syarat & Ketentuan Domba Cup 2025 yang berlaku. Seluruh data yang saya masukkan adalah benar dan dapat dipertanggungjawabkan.
      </p>
    </div>
  </div>
</section>
  <footer class="relative bg-dark-900 border-t border-white/10 pt-16 pb-8 overflow-hidden">
  <!-- Background Pattern -->
  <div class="absolute inset-0 z-0 opacity-30 pointer-events-none">
    <img src="./assets//a180d3109a5cb6b9b9aa60d81730446ebe275473.png" alt="pattern" class="w-full h-full object-cover">
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-20">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
      
      <!-- Brand & Desc -->
      <div class="md:col-span-5">
        <div class="flex items-center gap-3 mb-6">
          <img src="./assets/registration/14_2704.svg" alt="Logo" class="w-8 h-8">
          <span class="text-white font-light tracking-wider text-lg">DOMBA CUP</span>
        </div>
        <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-sm">
          Turnamen sepak bola amatir terbesar yang menjunjung tinggi sportivitas dan semangat kompetisi.
        </p>
        <div class="flex items-center gap-4">
          <a href="#" class="w-10 h-10 rounded-full bg-dark-800 border border-white/10 flex items-center justify-center hover:bg-brand-red hover:border-brand-red transition-colors">
            <img src="./assets/registration/14_2642.svg" alt="IG" class="w-4 h-4">
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-dark-800 border border-white/10 flex items-center justify-center hover:bg-brand-red hover:border-brand-red transition-colors">
            <img src="./assets/registration/14_2647.svg" alt="YT" class="w-4 h-4">
          </a>
          <a href="#" class="w-10 h-10 rounded-full bg-dark-800 border border-white/10 flex items-center justify-center hover:bg-brand-red hover:border-brand-red transition-colors">
            <img src="./assets/registration/14_2652.svg" alt="FB" class="w-4 h-4">
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="md:col-span-3">
        <h4 class="text-white font-light mb-6">Tautan Cepat</h4>
        <ul class="space-y-3">
          <li><a href="./index.php" class="text-gray-400 hover:text-white text-sm transition-colors">Beranda</a></li>
          <li><a href="./registration.php" class="text-gray-400 hover:text-white text-sm transition-colors">Daftar Tim</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Jadwal Pertandingan</a></li>
          <li><a href="./ticket.php" class="text-gray-400 hover:text-white text-sm transition-colors">Beli Tiket</a></li>
          <li><a href="./index.php" class="text-gray-400 hover:text-white text-sm transition-colors">Tentang Kami</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="md:col-span-4">
        <h4 class="text-white font-light mb-6">Kontak</h4>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <img src="./assets/registration/14_2674.svg" alt="mail" class="w-4 h-4 mt-0.5">
            <span class="text-gray-400 text-sm">info@dombacup.com</span>
          </li>
          <li class="flex items-start gap-3">
            <img src="./assets/registration/14_2679.svg" alt="phone" class="w-4 h-4 mt-0.5">
            <span class="text-gray-400 text-sm">+62 812 3456 7890</span>
          </li>
          <li class="flex items-start gap-3">
            <img src="./assets/registration/14_2684.svg" alt="location" class="w-4 h-4 mt-0.5">
            <span class="text-gray-400 text-sm leading-relaxed">Sekretariat Domba Cup<br>Jl. Stadion Utama No. 10</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4">
      <p class="text-gray-500 text-sm">Â© 2025 Domba Cup. All Rights Reserved.</p>
      <div class="flex items-center gap-4 text-sm">
        <a href="#" class="text-gray-500 hover:text-white transition-colors">Syarat & Ketentuan</a>
        <span class="text-gray-600">|</span>
        <a href="#" class="text-gray-500 hover:text-white transition-colors">Kebijakan Privasi</a>
      </div>
    </div>
  </div>
</footer>

  <script>
    // Mobile menu toggle
    const menuBtn = document.getElementById('mobile-menu-btn-reg');
    const mobileNav = document.getElementById('mobile-nav-reg');
    if (menuBtn && mobileNav) {
      menuBtn.addEventListener('click', () => mobileNav.classList.toggle('hidden'));
    }

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          if (mobileNav) mobileNav.classList.add('hidden');
        }
      });
    });

    // Multi-step form: steps 2-4 not yet implemented; keep step 1 visible only
    const stepContents = document.querySelectorAll('.step-content');
    const stepperSteps = document.querySelectorAll('.stepper-step');
    stepperSteps.forEach((el, idx) => {
      if (idx !== 0) {
        el.style.opacity = '0.4';
        el.style.pointerEvents = 'none';
      }
    });
    if (stepContents.length > 1) {
      stepContents.forEach((el, idx) => {
        if (idx !== 0) el.style.display = 'none';
      });
    }

    // Player count slider (11-22)
    const playerDisplay = document.getElementById('player-count-display');
    const minusBtn = document.getElementById('player-minus');
    const plusBtn = document.getElementById('player-plus');
    const progressBar = document.getElementById('player-progress-bar');
    let playerCount = 16;
    function updatePlayerUI() {
      if (playerDisplay) playerDisplay.textContent = playerCount;
      if (progressBar) {
        const pct = ((playerCount - 11) / (22 - 11)) * 100;
        progressBar.style.width = pct + '%';
      }
    }
    if (minusBtn) minusBtn.addEventListener('click', () => {
      if (playerCount > 11) { playerCount--; updatePlayerUI(); }
    });
    if (plusBtn) plusBtn.addEventListener('click', () => {
      if (playerCount < 22) { playerCount++; updatePlayerUI(); }
    });
    updatePlayerUI();

    // Accordion
    document.querySelectorAll('.accordion-item').forEach(item => {
      item.addEventListener('click', () => {
        const content = item.querySelector('.accordion-content');
        const icon = item.querySelector('.accordion-icon');
        if (!content) return;
        if (content.classList.contains('hidden')) {
          content.classList.remove('hidden');
          if (icon) icon.style.transform = 'rotate(180deg)';
        } else {
          content.classList.add('hidden');
          if (icon) icon.style.transform = 'rotate(0deg)';
        }
      });
    });

     // Accordion (safe: only elements with accordion-content)
     document.querySelectorAll('.accordion-item').forEach(item => {
       item.addEventListener('click', () => {
         const content = item.querySelector('.accordion-content');
         if (!content) return;
         content.classList.toggle('hidden');
       });
     });

     // API_BASE for local XAMPP
    const API_BASE = '/Domba-Cup/api';

    function setStatus(el, message, type) {
      el.textContent = message;
      el.className = 'text-sm mt-2 ' + (type === 'success' ? 'text-green-400' : 'text-red-400');
      el.classList.remove('hidden');
    }

    document.getElementById('submit-registration').addEventListener('click', async () => {
      const teamName = document.getElementById('reg-team-name')?.value.trim();
      const category = document.getElementById('reg-category')?.value;
      const captainName = document.getElementById('reg-captain-name')?.value.trim();
      const captainPhone = document.getElementById('reg-captain-phone')?.value.trim();
      const captainEmail = document.getElementById('reg-captain-email')?.value.trim();
      const origin = document.getElementById('reg-origin')?.value.trim();
      const feedback = document.getElementById('registration-feedback');

      if (!teamName || !category || !captainName || !captainPhone || !captainEmail) {
        setStatus(feedback, 'Semua field wajib diisi.', 'error');
        return;
      }

      if (!captainEmail.includes('@')) {
        setStatus(feedback, 'Format email tidak valid.', 'error');
        return;
      }

      feedback.classList.add('hidden');
      document.getElementById('submit-registration').disabled = true;

      try {
        const res = await fetch(API_BASE + '/register.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            team_name: teamName,
            category: category,
            captain_name: captainName,
            captain_phone: captainPhone,
            captain_email: captainEmail,
            origin: origin,
            total_price: category === 'U-17' ? 250000 : category === 'Dewasa' ? 350000 : 300000
          })
        });
        const json = await res.json();
        if (json.success) {
          setStatus(feedback, 'Pendaftaran berhasil!', 'success');
          document.getElementById('submit-registration').disabled = true;
          document.getElementById('submit-registration').textContent = 'Terkirim ✓';
        } else {
          setStatus(feedback, json.message || 'Gagal mengirim pendaftaran.', 'error');
          document.getElementById('submit-registration').disabled = false;
        }
      } catch (err) {
        setStatus(feedback, 'Terjadi kesalahan koneksi.', 'error');
        document.getElementById('submit-registration').disabled = false;
      }
    });
  </script>
</body>
</html>

