<?php
// admin/registrations.php - List team registrations with approve/reject buttons
require_once __DIR__ . '/../api/config.php';

$mysqli = db_connect();
$registrations = $mysqli->query("SELECT * FROM registrations ORDER BY created_at DESC")->fetch_all(MYSQLI_ASSOC);
$mysqli->close();

include __DIR__ . '/partials/header.php';
?>

<div class="max-w-7xl mx-auto px-6 py-8">
  <h1 class="text-3xl font-light mb-8">Pendaftaran <span class="text-brand-yellow">Tim</span></h1>

  <div class="bg-dark-800 border border-white/10 rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left">
        <thead class="bg-dark-700 text-xs uppercase text-gray-400">
          <tr>
            <th class="px-6 py-4">ID</th>
            <th class="px-6 py-4">Tim</th>
            <th class="px-6 py-4">Kategori</th>
            <th class="px-6 py-4">Kapten</th>
            <th class="px-6 py-4">Email</th>
            <th class="px-6 py-4">Total</th>
            <th class="px-6 py-4">Status</th>
            <th class="px-6 py-4">Bukti Bayar</th>
            <th class="px-6 py-4 text-right">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-white/5">
          <?php if (empty($registrations)): ?>
            <tr><td colspan="9" class="px-6 py-8 text-center text-gray-500">Belum ada pendaftaran.</td></tr>
          <?php else: ?>
            <?php foreach ($registrations as $r): ?>
              <tr class="hover:bg-white/5 transition-colors">
                <td class="px-6 py-4 text-gray-400">#<?php echo $r['id']; ?></td>
                <td class="px-6 py-4 font-medium text-white"><?php echo htmlspecialchars($r['team_name']); ?></td>
                <td class="px-6 py-4 text-gray-300"><?php echo htmlspecialchars($r['category']); ?></td>
                <td class="px-6 py-4 text-gray-300"><?php echo htmlspecialchars($r['captain_name']); ?></td>
                <td class="px-6 py-4 text-gray-400"><?php echo htmlspecialchars($r['captain_email']); ?></td>
                <td class="px-6 py-4 text-white">Rp<?php echo number_format($r['total_price'], 0, ',', '.'); ?></td>
                <td class="px-6 py-4">
                  <?php
                    $st = $r['status'];
                    $cls = $st === 'paid' ? 'bg-green-500/20 text-green-400' : ($st === 'pending' ? 'bg-yellow-500/20 text-yellow-400' : 'bg-red-500/20 text-red-400');
                  ?>
                  <span class="text-xs px-2 py-1 rounded <?php echo $cls; ?>"><?php echo strtoupper($st); ?></span>
                </td>
                <td class="px-6 py-4">
                  <?php if (!empty($r['payment_proof_path'])): ?>
                    <a href="<?php echo htmlspecialchars($r['payment_proof_path']); ?>" target="_blank" class="text-xs text-brand-yellow hover:underline">Lihat</a>
                  <?php else: ?>
                    <span class="text-xs text-gray-500">—</span>
                  <?php endif; ?>
                </td>
                <td class="px-6 py-4 text-right">
                  <?php if ($r['status'] === 'pending'): ?>
                    <form method="POST" action="../api/verify.php" class="inline-flex gap-2" onsubmit="return confirm('Approve pendaftaran ini?');">
                      <input type="hidden" name="type" value="registration">
                      <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                      <input type="hidden" name="status" value="paid">
                      <button type="submit" class="px-2 py-1 bg-brand-red/20 text-brand-red border border-brand-red/30 rounded text-xs hover:bg-brand-red hover:text-white transition-colors">Approve</button>
                    </form>
                    <form method="POST" action="../api/verify.php" class="inline-flex gap-2 ml-1" onsubmit="return confirm('Tolak pendaftaran ini?');">
                      <input type="hidden" name="type" value="registration">
                      <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                      <input type="hidden" name="status" value="cancelled">
                      <button type="submit" class="px-2 py-1 bg-red-500/20 text-red-400 border border-red-500/30 rounded text-xs hover:bg-red-600 hover:text-white transition-colors">Reject</button>
                    </form>
                  <?php else: ?>
                    <span class="text-xs text-gray-500">—</span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>
