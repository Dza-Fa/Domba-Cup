<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DOMBA CUP - Beli Tiket</title>
  <script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
        colors: {
          brand: {
            dark: '#0d0d0d',
            darker: '#111111',
            card: '#1a1a1a',
            red: '#ff3a1a',
            yellow: '#ffd600'
          }
        }
      }
    }
  }
</script>
</head>
<body>
  <!-- Navigation Header -->
<section id="section-header" class="fixed w-full z-50 bg-brand-card/85 backdrop-blur-sm border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
    <!-- Logo Area -->
      <a href="./index.php" class="text-white font-light text-xl tracking-wider hover:opacity-80 transition-opacity">DOMBA CUP</a>
    
    <!-- Desktop Navigation Links -->
    <nav class="hidden md:flex items-center gap-8">
      <a href="./index.php" class="text-[#f5f5f0] hover:text-white text-sm transition-colors">Tentang</a>
      <a href="#" class="text-[#f5f5f0] hover:text-white text-sm transition-colors">Kategori</a>
      <a href="#" class="text-[#f5f5f0] hover:text-white text-sm transition-colors">Jadwal</a>
      <a href="./ticket.php" class="text-brand-yellow font-light text-sm border-b-2 border-brand-yellow pb-1">Tiket</a>
    </nav>
    
    <!-- CTA Button -->
    <a href="./registration.php" class="bg-brand-red text-white px-6 py-2 rounded-sm text-sm font-light shadow-[4px_4px_0px_0px_#ffd600] hover:translate-y-[2px] hover:shadow-[2px_2px_0px_0px_#ffd600] transition-all inline-block">
      DAFTAR TIM
    </a>
    <!-- Mobile nav toggle -->
    <button id="mobile-menu-btn-ticket" class="md:hidden text-white text-2xl ml-3" aria-label="Menu">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
</section>
  <nav id="mobile-nav-ticket" class="hidden md:hidden absolute top-full left-0 w-full bg-brand-card/95 backdrop-blur-sm border-b border-white/10 p-4 space-y-3 z-40">
    <a href="./index.php" class="block text-white text-sm">Beranda</a>
    <a href="#" class="block text-gray-400 text-sm">Kategori</a>
    <a href="#" class="block text-gray-400 text-sm">Jadwal</a>
    <a href="./ticket.php" class="block text-brand-yellow text-sm">Tiket</a>
    <a href="./registration.php" class="block bg-brand-red text-white px-4 py-2 rounded text-sm text-center">DAFTAR TIM</a>
  </nav>
  <!-- Hero Banner Section -->
<section id="section-hero" class="relative pt-32 pb-20 px-6 min-h-[600px] flex flex-col items-center justify-center text-center overflow-hidden bg-brand-dark">
  <!-- Background Image with Gradient Overlay -->
  <div class="absolute inset-0 z-0">
    <img src="./assets/shared/8a0b682fea6295787c622b9036ad45b7e262a60d.png" class="w-full h-full object-cover opacity-25" alt="Stadium Atmosphere">
    <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/70 via-brand-dark/60 to-brand-dark"></div>
  </div>
  
  <div class="relative z-10 max-w-4xl mx-auto flex flex-col items-center">
    <!-- Date Badge -->
    <div class="bg-brand-yellow/10 border border-brand-yellow/40 rounded-full px-4 py-1.5 flex items-center gap-2 mb-8">
      <img src="./assets/ticket/1_15.svg" class="w-3 h-3" alt="Calendar Icon">
      <span class="text-brand-yellow text-sm font-light">15 Maret â€“ 28 April 2025</span>
    </div>
    
    <!-- Main Headline -->
    <h1 class="text-6xl md:text-7xl font-light mb-6 text-transparent bg-clip-text bg-gradient-to-b from-brand-yellow to-brand-red">
      BELI TIKET
    </h1>
    
    <!-- Subheadline -->
    <p class="text-[#eaeae0] text-lg md:text-xl mb-12">
      Hadir langsung, rasakan panasnya pertandingan!
    </p>
    
    <!-- Event Info Badges -->
    <div class="flex flex-wrap justify-center gap-4 md:gap-8">
      <div class="bg-brand-card/85 border border-brand-red/30 backdrop-blur-sm rounded-sm px-5 py-3 flex items-center gap-3">
        <img src="./assets/ticket/1_27.svg" class="w-4 h-4" alt="Location Icon">
        <span class="text-[#f5f5f0] text-sm">Stadion Utama Gelora Domba</span>
      </div>
      <div class="bg-brand-card/85 border border-brand-yellow/30 backdrop-blur-sm rounded-sm px-5 py-3 flex items-center gap-3">
        <img src="./assets/ticket/1_33.svg" class="w-4 h-4" alt="Ticket Icon">
        <span class="text-[#f5f5f0] text-sm">Tiket Tersedia</span>
      </div>
      <div class="bg-brand-card/85 border border-white/10 backdrop-blur-sm rounded-sm px-5 py-3 flex items-center gap-3">
        <img src="./assets/ticket/1_39.svg" class="w-4 h-4" alt="Teams Icon">
        <span class="text-[#f5f5f0] text-sm">32 Tim Bertanding</span>
      </div>
    </div>
  </div>
</section>
  <!-- Match Selection Section -->
<section id="section-matches" class="bg-brand-darker py-20 px-6 relative border-t-4 border-brand-red">
  <div class="max-w-7xl mx-auto">
    <!-- Section Title -->
    <div class="flex items-center gap-4 mb-4">
      <div class="w-1 h-8 bg-brand-red"></div>
      <h2 class="text-3xl font-light text-white uppercase tracking-wide">Pilih Pertandingan</h2>
    </div>
    <p class="text-gray-400 mb-10 ml-5">Pilih babak dan pertandingan yang ingin kamu saksikan langsung</p>
    
    <!-- Stage Tabs -->
    <div class="flex flex-wrap gap-4 mb-10 ml-5">
      <button class="bg-brand-red text-white px-8 py-3 rounded-sm font-light text-sm flex items-center gap-2 shadow-[3px_3px_0px_0px_#ffd600]">
        <img src="./assets/ticket/1_56.svg" class="w-4 h-4" alt="Stage Icon">
        Babak Penyisihan
      </button>
      <button class="bg-brand-card/80 border border-white/10 text-gray-400 hover:text-white px-8 py-3 rounded-sm font-light text-sm flex items-center gap-2 transition-colors">
        <img src="./assets/ticket/1_61.svg" class="w-4 h-4" alt="Stage Icon">
        Semifinal
      </button>
      <button class="bg-brand-card/80 border border-white/10 text-gray-400 hover:text-white px-8 py-3 rounded-sm font-light text-sm flex items-center gap-2 transition-colors">
        <img src="./assets/ticket/1_66.svg" class="w-4 h-4" alt="Stage Icon">
        Final
      </button>
    </div>
    
    <!-- Match Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ml-5">
      <!-- Active Match Card -->
      <div class="bg-brand-card/85 border border-brand-red/50 rounded-sm p-6 relative shadow-[4px_4px_0px_0px_#ff3a1a]">
        <div class="absolute top-0 right-0 bg-brand-red text-white text-xs font-light px-3 py-1">Grup A</div>
        
        <!-- Teams -->
        <div class="flex justify-between items-center mb-8 mt-4">
          <div class="flex flex-col items-center gap-2">
            <div class="w-12 h-12 rounded-full bg-[#2a2a2a] border-2 border-brand-red/30 flex items-center justify-center">
              <img src="./assets/ticket/1_75.svg" class="w-6 h-6" alt="Garuda FC Logo">
            </div>
            <span class="text-white font-light text-sm">Garuda FC</span>
          </div>
          <span class="text-brand-yellow font-light text-xl">VS</span>
          <div class="flex flex-col items-center gap-2">
            <div class="w-12 h-12 rounded-full bg-[#2a2a2a] border-2 border-brand-red/30 flex items-center justify-center">
              <img src="./assets/ticket/1_83.svg" class="w-6 h-6" alt="Elang United Logo">
            </div>
            <span class="text-white font-light text-sm">Elang United</span>
          </div>
        </div>
        
        <!-- Match Details -->
        <div class="space-y-3 border-t border-white/10 pt-4 mb-6">
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_89.svg" class="w-4 h-4" alt="Date Icon">
            <span class="text-gray-400 text-sm">Sabtu, 15 Maret 2025</span>
          </div>
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_95.svg" class="w-4 h-4" alt="Time Icon">
            <span class="text-gray-400 text-sm">15:00 WIB</span>
          </div>
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_101.svg" class="w-4 h-4" alt="Location Icon">
            <span class="text-gray-400 text-sm">Stadion Utama Gelora Domba</span>
          </div>
        </div>
        
        <button class="w-full bg-brand-red/20 border border-brand-red text-brand-red py-2 rounded-sm font-light text-sm hover:bg-brand-red hover:text-white transition-colors">
          Pilih Pertandingan Ini
        </button>
      </div>
      
      <!-- Inactive Match Card 1 -->
      <div class="bg-brand-card/85 border border-white/10 rounded-sm p-6 relative">
        <div class="absolute top-0 right-0 bg-[#2a2a2a] text-white text-xs font-light px-3 py-1">Grup A</div>
        <div class="flex justify-between items-center mb-8 mt-4">
          <div class="flex flex-col items-center gap-2">
            <div class="w-12 h-12 rounded-full bg-[#2a2a2a] border-2 border-white/10 flex items-center justify-center">
              <img src="./assets/ticket/1_114.svg" class="w-6 h-6" alt="Harimau SC Logo">
            </div>
            <span class="text-white font-light text-sm">Harimau SC</span>
          </div>
          <span class="text-brand-yellow font-light text-xl">VS</span>
          <div class="flex flex-col items-center gap-2">
            <div class="w-12 h-12 rounded-full bg-[#2a2a2a] border-2 border-white/10 flex items-center justify-center">
              <img src="./assets/ticket/1_122.svg" class="w-6 h-6" alt="Naga FC Logo">
            </div>
            <span class="text-white font-light text-sm">Naga FC</span>
          </div>
        </div>
        <div class="space-y-3 border-t border-white/10 pt-4 mb-6">
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_128.svg" class="w-4 h-4" alt="Date Icon">
            <span class="text-gray-400 text-sm">Sabtu, 15 Maret 2025</span>
          </div>
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_134.svg" class="w-4 h-4" alt="Time Icon">
            <span class="text-gray-400 text-sm">18:00 WIB</span>
          </div>
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_140.svg" class="w-4 h-4" alt="Location Icon">
            <span class="text-gray-400 text-sm">Lapangan B - Kompleks Domba</span>
          </div>
        </div>
        <button class="w-full border border-white/20 text-gray-400 py-2 rounded-sm font-light text-sm hover:bg-white/10 transition-colors">
          Pilih Pertandingan Ini
        </button>
      </div>

      <!-- Inactive Match Card 2 -->
      <div class="bg-brand-card/85 border border-white/10 rounded-sm p-6 relative">
        <div class="absolute top-0 right-0 bg-[#2a2a2a] text-white text-xs font-light px-3 py-1">Grup B</div>
        <div class="flex justify-between items-center mb-8 mt-4">
          <div class="flex flex-col items-center gap-2">
            <div class="w-12 h-12 rounded-full bg-[#2a2a2a] border-2 border-white/10 flex items-center justify-center">
              <img src="./assets/ticket/1_153.svg" class="w-6 h-6" alt="Banteng XI Logo">
            </div>
            <span class="text-white font-light text-sm">Banteng XI</span>
          </div>
          <span class="text-brand-yellow font-light text-xl">VS</span>
          <div class="flex flex-col items-center gap-2">
            <div class="w-12 h-12 rounded-full bg-[#2a2a2a] border-2 border-white/10 flex items-center justify-center">
              <img src="./assets/ticket/1_161.svg" class="w-6 h-6" alt="Rajawali FC Logo">
            </div>
            <span class="text-white font-light text-sm">Rajawali FC</span>
          </div>
        </div>
        <div class="space-y-3 border-t border-white/10 pt-4 mb-6">
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_167.svg" class="w-4 h-4" alt="Date Icon">
            <span class="text-gray-400 text-sm">Minggu, 16 Maret 2025</span>
          </div>
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_173.svg" class="w-4 h-4" alt="Time Icon">
            <span class="text-gray-400 text-sm">16:00 WIB</span>
          </div>
          <div class="flex items-center gap-3">
            <img src="./assets/ticket/1_179.svg" class="w-4 h-4" alt="Location Icon">
            <span class="text-gray-400 text-sm">Stadion Utama Gelora Domba</span>
          </div>
        </div>
        <button class="w-full border border-white/20 text-gray-400 py-2 rounded-sm font-light text-sm hover:bg-white/10 transition-colors">
          Pilih Pertandingan Ini
        </button>
      </div>
    </div>
  </div>
</section>
  <!-- Ticket Categories Section -->
<section id="section-tickets" class="bg-brand-dark py-20 px-6 relative">
  <!-- Background Pattern -->
  <div class="absolute inset-0 z-0">
    <img src="./assets/shared/a180d3109a5cb6b9b9aa60d81730446ebe275473.png" class="w-full h-full object-cover opacity-30" alt="Background Pattern">
  </div>
  
  <div class="max-w-7xl mx-auto relative z-10">
    <!-- Section Title -->
    <div class="flex items-center gap-4 mb-4">
      <div class="w-1 h-8 bg-brand-yellow"></div>
      <h2 class="text-3xl font-light text-white uppercase tracking-wide">Pilih <span class="text-brand-yellow">Kategori</span> Tiket</h2>
    </div>
    <p class="text-gray-400 mb-10 ml-5">Temukan kursi terbaikmu untuk menyaksikan aksi sengit di lapangan</p>
    
    <!-- Ticket Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 ml-5">
      
      <!-- Tribune Ticket -->
      <div class="bg-brand-card/85 border border-white/10 rounded-sm flex flex-col">
        <div class="p-6 bg-[#2a2a2a] border-b border-white/10 flex justify-between items-start">
          <div>
            <h3 class="text-white font-light text-xl mb-1">TRIBUNE</h3>
            <p class="text-gray-400 text-xs">Kursi terbatas â€¢ Area berdiri</p>
          </div>
          <span class="bg-brand-darker border border-white/20 text-gray-400 text-xs px-2 py-1 rounded-sm">Umum</span>
        </div>
        <div class="p-6 flex-grow flex flex-col">
          <div class="text-white font-light text-3xl mb-6">GRATIS</div>
          <ul class="space-y-4 mb-8 flex-grow">
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_213.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-gray-300 text-sm">Akses terbatas (kursi habis = masuk)</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_219.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-gray-300 text-sm">Area berdiri / duduk bebas</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_225.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-gray-300 text-sm">Akses area penonton umum</span>
            </li>
            <li class="flex items-start gap-3 opacity-50">
              <img src="./assets/ticket/1_231.svg" class="w-4 h-4 mt-0.5" alt="Cross">
              <span class="text-gray-400 text-sm line-through">Kursi bernomor</span>
            </li>
            <li class="flex items-start gap-3 opacity-50">
              <img src="./assets/ticket/1_237.svg" class="w-4 h-4 mt-0.5" alt="Cross">
              <span class="text-gray-400 text-sm line-through">Fasilitas tambahan</span>
            </li>
          </ul>
          
          <!-- Quantity Selector -->
          <div class="bg-brand-darker border border-white/10 rounded-sm p-4 flex justify-between items-center mb-4">
            <span class="text-gray-400 text-sm">Jumlah</span>
            <div class="flex items-center gap-4">
              <button class="w-7 h-7 bg-[#2a2a2a] border border-white/20 rounded-sm flex items-center justify-center text-white hover:bg-white/10">-</button>
              <span class="text-white font-light">1</span>
            </div>
          </div>
          <button class="w-full bg-white/10 text-white py-3 rounded-sm font-light text-sm hover:bg-white/20 transition-colors">
            BELI SEKARANG
          </button>
        </div>
      </div>

      <!-- Grandstand Ticket (Highlighted) -->
      <div class="bg-brand-card/85 border-2 border-brand-red rounded-sm flex flex-col shadow-[5px_5px_0px_0px_#ffd600] relative transform -translate-y-2">
        <div class="absolute top-0 right-0 w-full h-1 bg-gradient-to-r from-brand-yellow to-brand-red"></div>
        <div class="p-6 bg-brand-red/10 border-b border-brand-red/20 flex justify-between items-start">
          <div>
            <h3 class="text-white font-light text-xl mb-1">GRANDSTAND</h3>
            <p class="text-gray-400 text-xs">Per tiket â€¢ Kursi bernomor</p>
          </div>
          <span class="bg-brand-red/20 border border-brand-red text-brand-red text-xs px-2 py-1 rounded-sm font-light">Populer</span>
        </div>
        <div class="p-6 flex-grow flex flex-col">
          <div class="text-white font-light text-3xl mb-6">Rp 50.000</div>
          <ul class="space-y-4 mb-8 flex-grow">
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_273.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-gray-300 text-sm">Kursi bernomor terjamin</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_279.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-gray-300 text-sm">Akses toilet khusus penonton</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_285.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-gray-300 text-sm">Area merokok tersedia</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_291.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-gray-300 text-sm">Pandangan tribun tengah</span>
            </li>
            <li class="flex items-start gap-3 opacity-50">
              <img src="./assets/ticket/1_297.svg" class="w-4 h-4 mt-0.5" alt="Cross">
              <span class="text-gray-400 text-sm line-through">Meet & greet area</span>
            </li>
          </ul>
          
          <!-- Quantity Selector -->
          <div class="bg-brand-darker border border-brand-red/20 rounded-sm p-4 flex justify-between items-center mb-4">
            <span class="text-gray-400 text-sm">Jumlah</span>
            <div class="flex items-center gap-4">
              <button class="w-7 h-7 bg-brand-red/20 border border-brand-red/40 rounded-sm flex items-center justify-center text-white hover:bg-brand-red/40">-</button>
              <span class="text-white font-light">2</span>
            </div>
          </div>
          <button class="w-full bg-brand-red text-white py-3 rounded-sm font-light text-sm shadow-[3px_3px_0px_0px_#ffd600] hover:translate-y-[2px] hover:shadow-[1px_1px_0px_0px_#ffd600] transition-all">
            BELI SEKARANG
          </button>
        </div>
      </div>

      <!-- VIP Ticket -->
      <div class="bg-brand-card/85 border-2 border-brand-yellow rounded-sm flex flex-col shadow-[5px_5px_0px_0px_#ff3a1a]">
        <div class="p-6 bg-[#2a2a2a] border-b border-white/10 flex justify-between items-start relative overflow-hidden">
          <div class="absolute top-0 right-0 bg-brand-yellow text-black text-xs font-light px-3 py-1">EKSKLUSIF</div>
          <div class="mt-2">
            <h3 class="text-brand-yellow font-light text-xl mb-1">VIP</h3>
            <p class="text-brand-yellow/60 text-xs">Per tiket â€¢ Pengalaman premium</p>
          </div>
        </div>
        <div class="p-6 flex-grow flex flex-col">
          <div class="text-brand-yellow font-light text-3xl mb-6">Rp 150.000</div>
          <ul class="space-y-4 mb-8 flex-grow">
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_332.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-[#eaeae0] text-sm">Kursi premium baris depan</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_338.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-[#eaeae0] text-sm">Parkir gratis (1 kendaraan)</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_344.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-[#eaeae0] text-sm">Snack & minuman gratis</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_350.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-[#eaeae0] text-sm">Akses meet & greet area</span>
            </li>
            <li class="flex items-start gap-3">
              <img src="./assets/ticket/1_356.svg" class="w-4 h-4 mt-0.5" alt="Check">
              <span class="text-[#eaeae0] text-sm">Lounge eksklusif VIP</span>
            </li>
          </ul>
          
          <!-- Quantity Selector -->
          <div class="bg-black/40 border border-brand-yellow/30 rounded-sm p-4 flex justify-between items-center mb-4">
            <span class="text-brand-yellow/70 text-sm">Jumlah</span>
            <div class="flex items-center gap-4">
              <button class="w-7 h-7 bg-brand-yellow/15 border border-brand-yellow/40 rounded-sm flex items-center justify-center text-white hover:bg-brand-yellow/30">-</button>
              <span class="text-white font-light">1</span>
            </div>
          </div>
          <button class="w-full bg-gradient-to-b from-brand-yellow to-[#e13300] text-black py-3 rounded-sm font-light text-sm hover:opacity-90 transition-opacity">
            BELI SEKARANG
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Order Form Section -->
<section id="section-form" class="bg-brand-darker py-20 px-6 relative">
  <div class="max-w-7xl mx-auto">
    <!-- Section Title -->
    <div class="flex items-center gap-4 mb-4">
      <div class="w-1 h-8 bg-brand-red"></div>
      <h2 class="text-3xl font-light text-white uppercase tracking-wide">Form Pemesanan</h2>
    </div>
    <p class="text-gray-400 mb-10 ml-5">Lengkapi data diri dan pilih metode pembayaranmu</p>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 ml-5">
      <!-- Left Column: Form Inputs -->
      <div class="lg:col-span-2 space-y-6">
        
        <!-- Personal Data Block -->
        <div class="bg-brand-card/85 border border-white/10 rounded-sm p-6 backdrop-blur-sm">
          <div class="flex items-center gap-2 mb-6">
            <img src="./assets/ticket/1_394.svg" class="w-4 h-4" alt="User Icon">
            <h3 class="text-white font-light text-lg">Data Pribadi</h3>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-gray-400 text-sm mb-2">Nama Lengkap *</label>
              <div class="relative">
                <img src="./assets/ticket/1_407.svg" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4" alt="Input Icon">
                <input type="text" id="ticket-buyer-name" value="Ahmad Fauzi" class="w-full bg-brand-darker border border-white/15 rounded-sm py-3 pl-10 pr-4 text-white focus:outline-none focus:border-brand-red">
              </div>
            </div>
            <div>
              <label class="block text-gray-400 text-sm mb-2">Email *</label>
              <div class="relative">
                <img src="./assets/ticket/1_418.svg" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4" alt="Input Icon">
                <input type="email" id="ticket-buyer-email" value="ahmad@email.com" class="w-full bg-brand-darker border border-white/15 rounded-sm py-3 pl-10 pr-4 text-white focus:outline-none focus:border-brand-red">
              </div>
            </div>
            <div>
              <label class="block text-gray-400 text-sm mb-2">No. HP *</label>
              <div class="relative">
                <img src="./assets/ticket/1_429.svg" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4" alt="Input Icon">
                <input type="tel" id="ticket-buyer-phone" value="+62 812 3456 7890" class="w-full bg-brand-darker border border-white/15 rounded-sm py-3 pl-10 pr-4 text-white focus:outline-none focus:border-brand-red">
              </div>
            </div>
            <div>
              <label class="block text-gray-400 text-sm mb-2">Jumlah Tiket *</label>
              <div class="relative">
                <img src="./assets/ticket/1_444.svg" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4" alt="Input Icon">
                <select id="ticket-quantity" class="w-full bg-brand-darker border border-white/15 rounded-sm py-3 pl-10 pr-4 text-white appearance-none focus:outline-none focus:border-brand-red">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
          </div>
          
          <div class="mt-6 pt-6 border-t border-white/10">
            <label class="block text-gray-400 text-sm mb-2">Pilihan Tiket</label>
            <div class="flex items-center gap-3 bg-brand-red/10 border border-brand-red/20 p-3 rounded-sm">
              <span class="text-brand-red text-sm font-light">Grandstand â€” Garuda FC vs Elang United</span>
              <img src="./assets/ticket/1_453.svg" class="w-4 h-4 ml-auto" alt="Edit Icon">
            </div>
          </div>
        </div>

        <!-- Promo Code Block -->
        <div class="bg-brand-card/85 border border-white/10 rounded-sm p-6 backdrop-blur-sm">
          <div class="flex items-center gap-2 mb-4">
            <img src="./assets/ticket/1_458.svg" class="w-4 h-4" alt="Promo Icon">
            <h3 class="text-white font-light text-lg">Kode Promo</h3>
          </div>
          <div class="flex gap-3 mb-2">
            <div class="relative flex-grow">
              <img src="./assets/ticket/1_468.svg" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4" alt="Input Icon">
              <input type="text" placeholder="Masukkan kode promo..." class="w-full bg-brand-darker border border-white/15 rounded-sm py-3 pl-10 pr-4 text-gray-400 focus:outline-none focus:border-brand-yellow">
            </div>
            <button class="bg-brand-yellow text-black px-6 py-3 rounded-sm font-light text-sm shadow-[3px_3px_0px_0px_#ff3a1a] hover:translate-y-[2px] hover:shadow-[1px_1px_0px_0px_#ff3a1a] transition-all">
              PAKAI
            </button>
          </div>
          <p class="text-gray-400 text-xs">Gunakan kode DOMBA25 untuk diskon 20%</p>
        </div>

        <!-- Payment Method Block -->
        <div class="bg-brand-card/85 border border-white/10 rounded-sm p-6 backdrop-blur-sm">
          <div class="flex items-center gap-2 mb-6">
            <img src="./assets/ticket/1_477.svg" class="w-4 h-4" alt="Payment Icon">
            <h3 class="text-white font-light text-lg">Metode Pembayaran</h3>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <!-- Selected Payment -->
            <div class="bg-brand-red/10 border-2 border-brand-red rounded-sm p-4 flex flex-col items-center text-center gap-2 shadow-[3px_3px_0px_0px_#ffd600] cursor-pointer">
              <img src="./assets/ticket/1_483.svg" class="w-6 h-6" alt="Bank Icon">
              <span class="text-white font-light text-sm">Transfer Bank</span>
              <span class="text-gray-400 text-xs">BCA, Mandiri, BRI</span>
            </div>
            <!-- Unselected Payment -->
            <div class="bg-brand-card/60 border border-white/10 rounded-sm p-4 flex flex-col items-center text-center gap-2 cursor-pointer hover:border-white/30 transition-colors">
              <img src="./assets/ticket/1_491.svg" class="w-6 h-6" alt="QRIS Icon">
              <span class="text-gray-300 font-light text-sm">QRIS</span>
              <span class="text-gray-500 text-xs">Scan & Bayar</span>
            </div>
            <!-- Unselected Payment -->
            <div class="bg-brand-card/60 border border-white/10 rounded-sm p-4 flex flex-col items-center text-center gap-2 cursor-pointer hover:border-white/30 transition-colors">
              <img src="./assets/ticket/1_499.svg" class="w-6 h-6" alt="E-Wallet Icon">
              <span class="text-gray-300 font-light text-sm">E-Wallet</span>
              <span class="text-gray-500 text-xs">OVO / GoPay / Dana</span>
            </div>
          </div>
          
          <!-- Bank Transfer Details -->
          <div class="bg-brand-darker border border-brand-red/20 rounded-sm p-4">
            <div class="flex items-center gap-2 mb-4">
              <img src="./assets/ticket/1_508.svg" class="w-4 h-4" alt="Info Icon">
              <span class="text-white font-light text-sm">Detail Transfer Bank</span>
            </div>
            <div class="flex justify-between items-center mb-2">
              <span class="text-gray-500 text-sm">Bank BCA</span>
              <span class="text-white font-light text-sm">1234 5678 90</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-500 text-sm">Atas Nama</span>
              <span class="text-white font-light text-sm">Panitia Domba Cup 2025</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Order Summary -->
      <div class="relative">
        <div class="sticky top-24 bg-brand-card/85 border border-white/10 rounded-sm p-6 backdrop-blur-sm shadow-[5px_5px_0px_0px_#ffd600]">
          <!-- Top Gradient Border -->
          <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-brand-yellow to-brand-red"></div>
          
          <div class="flex items-center gap-2 mb-6 border-b border-white/10 pb-4">
            <img src="./assets/ticket/1_527.svg" class="w-4 h-4" alt="Summary Icon">
            <h3 class="text-white font-light text-lg">Ringkasan Order</h3>
          </div>
          
          <!-- Match Info -->
          <div class="bg-brand-darker border border-brand-red/20 rounded-sm p-4 mb-6">
            <span class="text-gray-500 text-xs block mb-1">Pertandingan</span>
            <span class="text-white font-light text-sm block mb-1">Garuda FC vs Elang United</span>
            <span class="text-gray-400 text-xs block mb-2">Sabtu, 15 Maret 2025 â€¢ 15:00 WIB</span>
            <span class="text-gray-500 text-xs block">Stadion Utama Gelora Domba</span>
          </div>
          
          <!-- Ticket Info -->
          <div class="flex justify-between items-center mb-4">
            <div>
              <span class="text-white font-light text-sm block">Grandstand Ã— 2</span>
              <span class="text-gray-500 text-xs">Rp 50.000 / tiket</span>
            </div>
              <span class="text-white font-light text-sm">Rp 100.000</span>
          </div>
          
          <!-- Price Breakdown -->
          <div class="space-y-3 border-t border-white/10 pt-4 mb-6">
            <div class="flex justify-between items-center">
              <span class="text-gray-400 text-sm">Subtotal</span>
              <span class="text-white font-light text-sm">Rp 100.000</span>
            </div>
            <div class="flex justify-between items-center">
              <div class="flex items-center gap-2">
                <img src="./assets/ticket/1_557.svg" class="w-3 h-3" alt="Promo Icon">
                <span class="text-brand-yellow text-sm">Promo DOMBA25</span>
              </div>
              <span class="text-brand-yellow font-light text-sm">- Rp 20.000</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-gray-400 text-sm">Biaya Layanan</span>
              <span class="text-white font-light text-sm">Rp 5.000</span>
            </div>
          </div>
          
          <!-- Total -->
          <div class="flex justify-between items-center border-t border-brand-red pt-4 mb-6">
            <span class="text-white font-light text-lg">Total Bayar</span>
            <span class="text-brand-yellow font-light text-xl">Rp 85.000</span>
          </div>
          
           <!-- Submit Button -->
           <button id="btn-submit-ticket" type="button" class="w-full bg-gradient-to-r from-brand-yellow to-brand-red text-black py-3 rounded-sm font-light text-sm flex justify-center items-center gap-2 hover:opacity-90 transition-opacity mb-4">
             <img src="./assets/ticket/1_575.svg" class="w-4 h-4" alt="Pay Icon">
             LANJUT BAYAR
           </button>
           <p id="ticket-feedback" class="text-xs text-center hidden mb-4"></p>
           <div id="proof-area" class="hidden border-t border-white/10 pt-4 space-y-3">
             <p class="text-gray-300 text-sm">Transfer ke <span class="text-white">Bank BCA 1234 5678 90</span> atas nama <span class="text-white">Panitia Domba Cup 2025</span>, lalu upload bukti pembayaran di bawah ini.</p>
             <label class="block text-gray-400 text-sm">Bukti Pembayaran</label>
             <input type="file" id="proof-file" accept="image/*,.pdf" class="w-full text-sm text-gray-300">
             <button id="btn-upload-proof" type="button" class="w-full bg-brand-red text-white py-2.5 rounded-sm text-sm font-medium hover:bg-red-600 transition-colors">Upload Bukti Pembayaran</button>
             <p id="proof-feedback" class="text-xs text-center hidden"></p>
           </div>
           
           <p class="text-gray-500 text-xs text-center">
             Dengan melanjutkan, kamu menyetujui syarat & ketentuan Domba Cup 2025
           </p>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- How to Buy Section -->
<section id="section-steps" class="bg-brand-dark py-20 px-6 relative">
  <!-- Background Pattern -->
  <div class="absolute inset-0 z-0">
    <img src="./assets/shared/a180d3109a5cb6b9b9aa60d81730446ebe275473.png" class="w-full h-full object-cover opacity-30" alt="Background Pattern">
  </div>
  
  <div class="max-w-7xl mx-auto relative z-10">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <h2 class="text-3xl font-light text-white uppercase tracking-wide mb-2">Cara <span class="text-brand-yellow">Pembelian</span></h2>
      <p class="text-gray-400">Proses cepat, gampang, tanpa ribet!</p>
    </div>
    
    <!-- Steps Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
      <!-- Connecting Lines (Desktop Only) -->
      <div class="hidden md:block absolute top-1/2 left-[16%] right-[16%] h-0.5 bg-brand-red/30 -translate-y-1/2 z-0"></div>
      
      <!-- Step 1 -->
      <div class="bg-brand-card/85 border border-brand-red rounded-sm p-8 flex flex-col items-center text-center relative z-10 backdrop-blur-sm">
        <div class="absolute -top-6 bg-gradient-to-b from-brand-red to-brand-yellow text-transparent bg-clip-text text-4xl font-light">01</div>
        <div class="w-16 h-16 bg-brand-red/10 border-2 border-brand-red/40 rounded-sm flex items-center justify-center mb-4 mt-4">
          <img src="./assets/ticket/1_595.svg" class="w-8 h-8" alt="Ticket Icon">
        </div>
        <h3 class="text-white font-light text-lg mb-2">Pilih Tiket</h3>
        <p class="text-gray-400 text-sm">Pilih pertandingan dan kategori tiket yang sesuai dengan budget dan keinginanmu.</p>
      </div>
      
      <!-- Step 2 -->
      <div class="bg-brand-card/85 border border-white/10 rounded-sm p-8 flex flex-col items-center text-center relative z-10 backdrop-blur-sm">
        <div class="absolute -top-6 bg-gradient-to-b from-brand-red to-brand-yellow text-transparent bg-clip-text text-4xl font-light">02</div>
        <div class="w-16 h-16 bg-brand-yellow/10 border-2 border-brand-yellow/40 rounded-sm flex items-center justify-center mb-4 mt-4">
          <img src="./assets/ticket/1_606.svg" class="w-8 h-8" alt="Pay Icon">
        </div>
        <h3 class="text-white font-light text-lg mb-2">Bayar & Konfirmasi</h3>
        <p class="text-gray-400 text-sm">Selesaikan pembayaran via Transfer Bank, QRIS, atau E-Wallet. Konfirmasi otomatis via email.</p>
      </div>
      
      <!-- Step 3 -->
      <div class="bg-brand-card/85 border border-white/10 rounded-sm p-8 flex flex-col items-center text-center relative z-10 backdrop-blur-sm">
        <div class="absolute -top-6 bg-gradient-to-b from-brand-red to-brand-yellow text-transparent bg-clip-text text-4xl font-light">03</div>
        <div class="w-16 h-16 bg-white/5 border-2 border-white/10 rounded-sm flex items-center justify-center mb-4 mt-4">
          <img src="./assets/ticket/1_617.svg" class="w-8 h-8" alt="E-Ticket Icon">
        </div>
        <h3 class="text-white font-light text-lg mb-2">Tunjukkan E-Tiket</h3>
        <p class="text-gray-400 text-sm">Tunjukkan e-tiket di pintu masuk. Scan QR code dan masuk untuk menyaksikan aksi lapangan.</p>
      </div>
    </div>
    
    <!-- Important Note -->
    <div class="mt-12 bg-brand-red/10 border border-brand-red/30 rounded-sm p-5 flex items-start gap-4">
      <img src="./assets/ticket/1_627.svg" class="w-6 h-6 mt-0.5 flex-shrink-0" alt="Info Icon">
      <p class="text-gray-300 text-sm leading-relaxed">
        <span class="font-light text-white">Penting:</span> E-tiket akan dikirim ke email terdaftar dalam 5-10 menit setelah pembayaran terkonfirmasi. Pastikan email kamu aktif dan periksa folder spam jika tidak ditemukan di inbox.
      </p>
    </div>
  </div>
</section>
  <!-- FAQ Section -->
<section id="section-faq" class="bg-brand-darker py-20 px-6 relative">
  <!-- Background Pattern -->
  <div class="absolute inset-0 z-0">
    <img src="./assets/shared/a180d3109a5cb6b9b9aa60d81730446ebe275473.png" class="w-full h-full object-cover opacity-25" alt="Background Pattern">
  </div>
  
  <div class="max-w-4xl mx-auto relative z-10">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-3xl font-light text-white uppercase tracking-wide mb-2">Pertanyaan <span class="text-brand-yellow">Umum</span></h2>
      <p class="text-gray-400">Semua yang perlu kamu tahu tentang tiket Domba Cup 2025</p>
    </div>
    
    <!-- Accordion List -->
    <div class="space-y-4 mb-12">
      <!-- Open Item -->
      <div class="bg-brand-card/85 border border-brand-red rounded-sm backdrop-blur-sm overflow-hidden">
        <button class="w-full px-6 py-4 flex justify-between items-center text-left">
          <span class="text-white font-light">Bagaimana cara mendapatkan e-tiket setelah bayar?</span>
          <img src="./assets/ticket/1_645.svg" class="w-4 h-4 transform rotate-180" alt="Arrow Up">
        </button>
        <div class="px-6 pb-5">
          <p class="text-gray-400 text-sm leading-relaxed">
            Setelah pembayaran berhasil dikonfirmasi, e-tiket akan otomatis dikirimkan ke alamat email yang kamu daftarkan. E-tiket berisi QR code unik yang perlu ditunjukkan saat masuk ke venue pertandingan. Proses pengiriman membutuhkan waktu 5-10 menit.
          </p>
        </div>
      </div>
      
      <!-- Closed Items -->
      <div class="bg-brand-card/85 border border-white/10 rounded-sm backdrop-blur-sm">
        <button class="w-full px-6 py-4 flex justify-between items-center text-left">
          <span class="text-gray-300 font-light">Apakah tiket bisa dibatalkan atau direfund?</span>
          <img src="./assets/ticket/1_654.svg" class="w-4 h-4" alt="Arrow Down">
        </button>
      </div>
      
      <div class="bg-brand-card/85 border border-white/10 rounded-sm backdrop-blur-sm">
        <button class="w-full px-6 py-4 flex justify-between items-center text-left">
          <span class="text-gray-300 font-light">Berapa maksimum tiket yang bisa dibeli per transaksi?</span>
          <img src="./assets/ticket/1_661.svg" class="w-4 h-4" alt="Arrow Down">
        </button>
      </div>
      
      <div class="bg-brand-card/85 border border-white/10 rounded-sm backdrop-blur-sm">
        <button class="w-full px-6 py-4 flex justify-between items-center text-left">
          <span class="text-gray-300 font-light">Apakah anak-anak memerlukan tiket tersendiri?</span>
          <img src="./assets/ticket/1_668.svg" class="w-4 h-4" alt="Arrow Down">
        </button>
      </div>
      
      <div class="bg-brand-card/85 border border-white/10 rounded-sm backdrop-blur-sm">
        <button class="w-full px-6 py-4 flex justify-between items-center text-left">
          <span class="text-gray-300 font-light">Apa yang harus dilakukan jika e-tiket tidak diterima?</span>
          <img src="./assets/ticket/1_675.svg" class="w-4 h-4" alt="Arrow Down">
        </button>
      </div>
    </div>
    
    <!-- Contact Links -->
    <div class="text-center">
      <p class="text-gray-400 mb-4">Masih ada pertanyaan? Hubungi kami langsung</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="#" class="bg-brand-card/85 border border-white/10 px-5 py-2.5 rounded-sm flex items-center gap-2 hover:bg-white/10 transition-colors">
          <img src="./assets/ticket/1_683.svg" class="w-4 h-4" alt="WhatsApp Icon">
          <span class="text-gray-300 text-sm">WhatsApp</span>
        </a>
        <a href="#" class="bg-brand-card/85 border border-white/10 px-5 py-2.5 rounded-sm flex items-center gap-2 hover:bg-white/10 transition-colors">
          <img src="./assets/ticket/1_688.svg" class="w-4 h-4" alt="Email Icon">
          <span class="text-gray-300 text-sm">Email</span>
        </a>
        <a href="#" class="bg-brand-card/85 border border-white/10 px-5 py-2.5 rounded-sm flex items-center gap-2 hover:bg-white/10 transition-colors">
          <img src="./assets/ticket/1_693.svg" class="w-4 h-4" alt="Instagram Icon">
          <span class="text-gray-300 text-sm">Instagram</span>
        </a>
      </div>
    </div>
  </div>
</section>
  <!-- Footer Section -->
<footer id="section-footer" class="bg-brand-darker border-t border-white/10 pt-16 pb-8 px-6 relative">
  <!-- Background Pattern -->
  <div class="absolute inset-0 z-0">
    <img src="./assets/shared/a180d3109a5cb6b9b9aa60d81730446ebe275473.png" class="w-full h-full object-cover opacity-30" alt="Background Pattern">
  </div>
  
  <div class="max-w-7xl mx-auto relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
      
      <!-- Brand Info -->
      <div class="lg:col-span-2">
        <div class="flex items-center gap-3 mb-6">
          <img src="./assets/ticket/1_703.svg" class="w-8 h-8" alt="Domba Cup Logo">
          <span class="text-white font-light text-xl tracking-wider">DOMBA CUP</span>
        </div>
        <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-md">
          Turnamen sepak bola amatir terbesar yang menjunjung tinggi sportivitas dan semangat kompetisi.
        </p>
        <div class="flex gap-4">
          <a href="#" class="w-10 h-10 bg-brand-card/85 border border-white/10 rounded-sm flex items-center justify-center hover:bg-white/10 transition-colors">
            <img src="./assets/ticket/1_712.svg" class="w-4 h-4" alt="Social Icon">
          </a>
          <a href="#" class="w-10 h-10 bg-brand-card/85 border border-white/10 rounded-sm flex items-center justify-center hover:bg-white/10 transition-colors">
            <img src="./assets/ticket/1_717.svg" class="w-4 h-4" alt="Social Icon">
          </a>
          <a href="#" class="w-10 h-10 bg-brand-card/85 border border-white/10 rounded-sm flex items-center justify-center hover:bg-white/10 transition-colors">
            <img src="./assets/ticket/1_722.svg" class="w-4 h-4" alt="Social Icon">
          </a>
        </div>
      </div>
      
      <!-- Quick Links -->
      <div>
        <h4 class="text-white font-light mb-6">Tautan Cepat</h4>
        <ul class="space-y-3">
          <li><a href="./index.php" class="text-gray-400 hover:text-white text-sm transition-colors">Beranda</a></li>
          <li><a href="./registration.php" class="text-gray-400 hover:text-white text-sm transition-colors">Daftar Tim</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Jadwal Pertandingan</a></li>
          <li><a href="./ticket.php" class="text-brand-yellow font-light text-sm transition-colors">Beli Tiket</a></li>
          <li><a href="./index.php" class="text-gray-400 hover:text-white text-sm transition-colors">Tentang Kami</a></li>
        </ul>
      </div>
      
      <!-- Contact Info -->
      <div>
        <h4 class="text-white font-light mb-6">Kontak</h4>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <img src="./assets/ticket/1_744.svg" class="w-4 h-4 mt-0.5" alt="Email Icon">
            <span class="text-gray-400 text-sm">info@dombacup.com</span>
          </li>
          <li class="flex items-start gap-3">
            <img src="./assets/ticket/1_749.svg" class="w-4 h-4 mt-0.5" alt="Phone Icon">
            <span class="text-gray-400 text-sm">+62 812 3456 7890</span>
          </li>
          <li class="flex items-start gap-3">
            <img src="./assets/ticket/1_754.svg" class="w-4 h-4 mt-0.5" alt="Location Icon">
            <span class="text-gray-400 text-sm">Sekretariat Domba Cup<br>Jl. Stadion Utama No. 10</span>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Bottom Bar -->
    <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
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
    const API_BASE = '/Domba-Cup/api';
    let currentTicketId = null;

    function flash(el, message, type) {
      const ok = type === 'success';
      el.textContent = message;
      el.className = 'text-xs text-center ' + (ok ? 'text-green-400' : 'text-red-400');
      el.classList.remove('hidden');
    }

    document.getElementById('btn-submit-ticket').addEventListener('click', async () => {
      const name = document.getElementById('ticket-buyer-name').value.trim();
      const email = document.getElementById('ticket-buyer-email').value.trim();
      const phone = document.getElementById('ticket-buyer-phone').value.trim();
      const qty = parseInt(document.getElementById('ticket-quantity').value || '1', 10);
      const feedback = document.getElementById('ticket-feedback');

      if (!name || !email || !phone || !qty) {
        flash(feedback, 'Nama, email, phone, dan jumlah wajib diisi.', 'error');
        return;
      }

      const payload = {
        match_id: 'grandstand-garuda-elang',
        match_label: 'Grandstand - Garuda FC vs Elang United',
        buyer_name: name,
        buyer_email: email,
        buyer_phone: phone,
        quantity: qty,
        unit_price: 50000,
        total_price: 50000 * qty,
        payment_method: 'transfer_bank'
      };

      feedback.classList.remove('hidden');
      flash(feedback, 'Memproses pesanan...', 'error');

      try {
        const res = await fetch(API_BASE + '/purchase.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        });
        const json = await res.json();
        if (json.success) {
          currentTicketId = json.data.ticket_id;
          flash(feedback, 'Pesanan dibuat. Silakan upload bukti pembayaran.', 'success');
          document.getElementById('proof-area').classList.remove('hidden');
          document.getElementById('btn-submit-ticket').disabled = true;
        } else {
          flash(feedback, json.message || 'Gagal membuat pesanan.', 'error');
        }
      } catch (err) {
        flash(feedback, 'Terjadi kesalahan koneksi.', 'error');
      }
    });

    document.getElementById('btn-upload-proof').addEventListener('click', async () => {
      const fileInput = document.getElementById('proof-file');
      const proofFeedback = document.getElementById('proof-feedback');
      const ticketId = currentTicketId;

      if (!ticketId) {
        flash(proofFeedback, 'Pesanan belum dibuat.', 'error');
        return;
      }
      if (!fileInput.files.length) {
        flash(proofFeedback, 'Pilih file bukti pembayaran terlebih dahulu.', 'error');
        return;
      }

      const formData = new FormData();
      formData.append('ticket_id', ticketId);
      formData.append('payment_proof', fileInput.files[0]);

      try {
        const res = await fetch(API_BASE + '/upload-proof.php', {
          method: 'POST',
          body: formData
        });
        const json = await res.json();
        if (json.success) {
          flash(proofFeedback, 'Bukti pembayaran berhasil diupload. Menunggu verifikasi admin.', 'success');
          document.getElementById('btn-upload-proof').disabled = true;
          document.getElementById('proof-file').disabled = true;
        } else {
          flash(proofFeedback, json.message || 'Gagal upload bukti.', 'error');
        }
      } catch (err) {
        flash(proofFeedback, 'Terjadi kesalahan koneksi.', 'error');
      }
    });

    // Mobile menu toggle
    const menuBtnTicket = document.getElementById('mobile-menu-btn-ticket');
    const mobileNavTicket = document.getElementById('mobile-nav-ticket');
    if (menuBtnTicket && mobileNavTicket) {
      menuBtnTicket.addEventListener('click', () => mobileNavTicket.classList.toggle('hidden'));
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
          if (mobileNavTicket) mobileNavTicket.classList.add('hidden');
        }
      });
    });

    // Live price calculator
    const qtySelect = document.getElementById('ticket-quantity');
    const unitPrice = 50000;
    if (qtySelect) {
      qtySelect.addEventListener('change', () => {
        const qty = parseInt(qtySelect.value || '1', 10);
        const total = unitPrice * qty;
        const totalEl = document.getElementById('ticket-total-price');
        if (totalEl) totalEl.textContent = 'Rp ' + total.toLocaleString('id-ID');
      });
    }

    // Ticket type card selection
    document.querySelectorAll('.ticket-type-card').forEach(card => {
      card.addEventListener('click', () => {
        document.querySelectorAll('.ticket-type-card').forEach(c => {
          c.classList.remove('border-brand-red', 'ring-1', 'ring-brand-red');
          c.classList.add('border-white/10');
        });
        card.classList.remove('border-white/10');
        card.classList.add('border-brand-red', 'ring-1', 'ring-brand-red');
      });
    });

    // FAQ Accordion
    document.querySelectorAll('.faq-toggle').forEach(btn => {
      btn.addEventListener('click', () => {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector('.faq-icon');
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
  </script>
</body>
</html>

