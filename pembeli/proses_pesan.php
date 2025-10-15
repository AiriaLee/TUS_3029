<?php
// FIX: Include menggunakan jalur relatif: keluar (../) lalu masuk ke config/
include '../config/utskatryna.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_pembeli'];
    $kontak = $_POST['kontak'];
    $jumlah = $_POST['jumlah_order'];
    $satuan = $_POST['satuan']; 
    $status = 'Pending'; 

    // Menggunakan $pdo dari koneksi
    $stmt = $pdo->prepare("INSERT INTO pesanan (nama_pembeli, kontak, jumlah_order, satuan, status)
                           VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nama, $kontak, $jumlah, $satuan, $status]);

    echo "<script>alert('Pesanan berhasil dikirim! Silakan tunggu konfirmasi.'); window.location='../index.php';</script>";
}
?>