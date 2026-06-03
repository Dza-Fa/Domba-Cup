<?php
// admin/partials/header.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domba Cup - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'sans-serif'] },
          colors: {
            brand: { red: '#ff3a1a', yellow: '#ffd600' },
            dark: { 900: '#0d0d0d', 800: '#1a1a1a', 700: '#2a2a2a' }
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
<body class="bg-dark-900 text-white font-sans min-h-screen">
  <header class="border-b border-white/10 bg-dark-800/80 backdrop-blur-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <i class="fa-solid fa-futbol text-brand-red text-xl"></i>
        <span class="tracking-wider font-medium">DOMBA CUP <span class="text-gray-500 text-xs font-normal">ADMIN</span></span>
      </div>
      <nav class="flex items-center gap-6">
        <a href="index.php" class="text-sm text-gray-400 hover:text-brand-yellow transition-colors">Ringkasan</a>
        <a href="registrations.php" class="text-sm text-gray-400 hover:text-brand-yellow transition-colors">Pendaftaran</a>
        <a href="tickets.php" class="text-sm text-gray-400 hover:text-brand-yellow transition-colors">Tiket</a>
        <a href="../index.html" target="_blank" class="text-xs border border-white/20 px-3 py-1.5 rounded hover:border-brand-red transition-colors">Lihat Website</a>
      </nav>
    </div>
  </header>
