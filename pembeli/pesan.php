<?php
// File: pembeli/pesan.php
echo "<h2>Form Pemesanan Telur</h2>";
?>
<form action="proses_pesan.php" method="post">
  <label>Nama Pembeli:</label><br>
  <input type="text" name="nama_pembeli" required><br><br>

  <label>Kontak:</label><br>
  <input type="text" name="kontak" required><br><br>

  <label>Jumlah Order:</label><br>
  <input type="number" name="jumlah_order" required><br><br>
  
  <label>Satuan:</label><br>
  <select name="satuan" required>
    <option value="kg">Kilogram (kg)</option>
    <option value="kotak">Kotak</option>
  </select><br><br>

  <input type="submit" value="Kirim Pesanan">
</form>