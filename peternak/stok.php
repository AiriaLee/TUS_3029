<?php
include '../config/utskatryna.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jumlah = $_POST['jumlah_kg'];

    if (!is_numeric($jumlah) || $jumlah < 0) {
        echo "<script>alert('Jumlah stok tidak valid!'); window.location='stok.php';</script>";
        exit;
    }

    $stmt = $pdo->prepare("UPDATE stok_telur SET jumlah_kg = ? WHERE id = 1");
    $stmt->execute([$jumlah]);

    echo "<script>alert('Stok berhasil diperbarui!'); window.location='stok.php';</script>";
    exit;
}

$data = $pdo->query("SELECT * FROM stok_telur LIMIT 1")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Stok Telur</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <div class="container">
    <h2>👨‍🌾 Kelola Stok Telur</h2>

    <form method="POST" action="">
      <label for="jumlah_kg">Jumlah Stok (dalam KG):</label>
      <input type="number" id="jumlah_kg" name="jumlah_kg"
             value="<?= htmlspecialchars($data['jumlah_kg'] ?? 0); ?>" required>
      <input type="submit" value="Simpan Perubahan">
    </form>

    <hr>
    <a href="../index.php">🏠 Kembali ke Beranda</a>
  </div>
</body>
</html>
