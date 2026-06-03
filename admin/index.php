<?php
// admin/index.php - Admin dashboard overview
require_once __DIR__ . '/../api/config.php';

$mysqli = db_connect();

$totalRegistrations = $mysqli->query("SELECT COUNT(*) AS c FROM registrations")->fetch_assoc()['c'] ?? 0;
$totalTickets       = $mysqli->query("SELECT COUNT(*) AS c FROM tickets")->fetch_assoc()['c'] ?? 0;
$pendingReg         = $mysqli->query("SELECT COUNT(*) AS c FROM registrations WHERE status = 'pending'")->fetch_assoc()['c'] ?? 0;
$pendingTicket      = $mysqli->query("SELECT COUNT(*) AS c FROM tickets WHERE status = 'pending'")->fetch_assoc()['c'] ?? 0;
$revenue            = $mysqli->query("SELECT COALESCE(SUM(total_price), 0) AS s FROM tickets WHERE status = 'paid'")->fetch_assoc()['s'] ?? 0;

$recentRegistrations = $mysqli->query("SELECT id, category, team_name, captain_name, captain_email, status, created_at FROM registrations ORDER BY created_at DESC LIMIT 5")->fetch_all(MYSQLI_ASSOC);
$recentTickets       = $mysqli->query("SELECT id, match_label, buyer_name, buyer_email, total_price, status, created_at FROM tickets ORDER BY created_at DESC LIMIT 5")->fetch_all(MYSQLI_ASSOC);

$mysqli->close();

include __DIR__ . '/partials/header.php';
?>

<div class="max-w-7xl mx-auto px-6 py-8">
  <h1 class="text-3xl font-light mb-8">Ringkasan <span class="text-brand-yellow">Dashboard</span></h1>

  <!-- Stats -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <div class="bg-dark-800 border border-white/10 rounded-lg p-6">
      <p class="text-gray-400 text-xs uppercase tracking-wider mb-2">Total Pendaftaran</p>
      <p class="text-3xl font-light text-white"><?php echo $totalRegistrations; ?></p>
      <p class="text-brand-red text-sm mt-1"><?php echo $pendingReg; ?> menunggu verifikasi</p>
    </div>
    <div class="bg-dark-800 border border-white/10 rounded-lg p-6">
      <p class="text-gray-400 text-xs uppercase tracking-wider mb-2">Total Tiket</p>
      <p class="text-3xl font-light text-white"><?php echo $totalTickets; ?></p>
      <p class="text-brand-yellow text-sm mt-1"><?php echo $pendingTicket; ?> menunggu verifikasi</p>
    </div>
    <div class="bg-dark-800 border border-white/10 rounded-lg p-6">
      <p class="text-gray-400 text-xs uppercase tracking-wider mb-2">Pendapatan Terverifikasi</p>
      <p class="text-3xl font-light text-brand-yellow">Rp <?php echo number_format($revenue, 0, ',', '.'); ?></p>
    </div>
    <div class="bg-dark-800 border border-white/10 rounded-lg p-6">
      <p class="text-gray-400 text-xs uppercase tracking-wider mb-2">Status Sistem</p>
      <p class="text-lg font-light text-green-400">Aktif</p>
      <p class="text-gray-500 text-xs mt-1">Backend PHP + MySQL</p>
    </div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Recent Registrations -->
    <div class="bg-dark-800 border border-white/10 rounded-lg overflow-hidden">
      <div class="px-6 py-4 border-b border-white/10 flex items-center justify-between">
        <h2 class="text-sm font-medium uppercase tracking-wider">Pendaftaran Terbaru</h2>
        <a href="registrations.php" class="text-xs text-brand-yellow hover:underline">Lihat semua</a>
      </div>
      <div class="divide-y divide-white/5">
        <?php if (empty($recentRegistrations)): ?>
          <p class="px-6 py-8 text-center text-gray-500 text-sm">Belum ada pendaftaran.</p>
        <?php else: ?>
          <?php foreach ($recentRegistrations as $r): ?>
            <div class="px-6 py-3 flex items-center justify-between">
              <div class="min-w-0">
                <p class="text-sm font-medium text-white truncate"><?php echo htmlspecialchars($r['team_name']); ?></p>
                <p class="text-xs text-gray-400"><?php echo htmlspecialchars($r['category']); ?> - <?php echo htmlspecialchars($r['captain_email']); ?></p>
              </div>
              <span class="ml-3 text-xs px-2 py-1 rounded <?php echo $r['status'] === 'paid' ? 'bg-green-500/20 text-green-400' : ($r['status'] === 'pending' ? 'bg-yellow-500/20 text-yellow-400' : 'bg-red-500/20 text-red-400'); ?>">
                <?php echo strtoupper($r['status']); ?>
              </span>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>

    <!-- Recent Tickets -->
    <div class="bg-dark-800 border border-white/10 rounded-lg overflow-hidden">
      <div class="px-6 py-4 border-b border-white/10 flex items-center justify-between">
        <h2 class="text-sm font-medium uppercase tracking-wider">Tiket Terbaru</h2>
        <a href="tickets.php" class="text-xs text-brand-yellow hover:underline">Lihat semua</a>
      </div>
      <div class="divide-y divide-white/5">
        <?php if (empty($recentTickets)): ?>
          <p class="px-6 py-8 text-center text-gray-500 text-sm">Belum ada pembelian tiket.</p>
        <?php else: ?>
          <?php foreach ($recentTickets as $t): ?>
            <div class="px-6 py-3 flex items-center justify-between">
              <div class="min-w-0">
                <p class="text-sm font-medium text-white truncate"><?php echo htmlspecialchars($t['match_label']); ?></p>
                <p class="text-xs text-gray-400"><?php echo htmlspecialchars($t['buyer_name']); ?> - Rp<?php echo number_format($t['total_price'], 0, ',', '.'); ?></p>
              </div>
              <span class="ml-3 text-xs px-2 py-1 rounded <?php echo $t['status'] === 'paid' ? 'bg-green-500/20 text-green-400' : ($t['status'] === 'pending' ? 'bg-yellow-500/20 text-yellow-400' : 'bg-red-500/20 text-red-400'); ?>">
                <?php echo strtoupper($t['status']); ?>
              </span>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>
