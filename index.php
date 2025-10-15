<?php
include 'config/utskatryna.php';
$query = $pdo->query("SELECT * FROM stok_telur LIMIT 1");
$data = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Toko Telur</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <h2>📦 Stok Telur Tersedia</h2>
    <?php if ($data): ?>
      <p><strong>Jumlah Stok:</strong> <?= htmlspecialchars($data['jumlah_kg']); ?> KG</p>
      <a href="pembeli/pesan.php"><button>Pesan Sekarang</button></a>
    <?php else: ?>
      <p>Belum ada data stok telur di database.</p>
    <?php endif; ?>

    <hr>
    <a href="peternak/stok.php">👨‍🌾 Kelola Stok</a> |
    <a href="transaksi/list_pesanan.php">📋 Lihat Pesanan</a>
  </div>

  <script src="assets/js/script.js"></script>
</body>
</html>
