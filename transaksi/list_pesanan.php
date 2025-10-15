<?php
// File: transaksi/list_pesanan.php
include '../config/utskatryna.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ambil semua data pesanan dari database
$pesanan = $pdo->query("SELECT * FROM pesanan ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>📋 Daftar Pesanan</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <div class="container">
    <h2>📋 Daftar Pesanan</h2>

    <?php if (count($pesanan) > 0): ?>
    <table>
      <tr>
        <th>ID</th>
        <th>Nama Pembeli</th>
        <th>Kontak</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Status</th>
        <th>Aksi (Admin)</th>
      </tr>

      <?php foreach ($pesanan as $row): ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= htmlspecialchars($row['nama_pembeli']); ?></td>
        <td><?= htmlspecialchars($row['kontak']); ?></td>
        <td><?= htmlspecialchars($row['jumlah_order']); ?></td>
        <td><?= htmlspecialchars($row['satuan']); ?></td>
        <td style="color:red; font-weight:bold;"><?= htmlspecialchars($row['status']); ?></td>
        <td>
          <a href="hapus_pesanan.php?id=<?= $row['id']; ?>" 
             onclick="return confirm('Yakin ingin menghapus pesanan ini?')">🗑️ Hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <?php else: ?>
      <p>Belum ada pesanan masuk.</p>
    <?php endif; ?>

    <hr>
    <a href="../index.php">⬅ Kembali</a>
  </div>
</body>
</html>
