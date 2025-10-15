<?php
// File: transaksi/hapus_pesanan.php
include '../config/utskatryna.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Pastikan ada ID di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Pastikan ID angka agar aman
    if (is_numeric($id)) {
        $stmt = $pdo->prepare("DELETE FROM pesanan WHERE id = ?");
        $stmt->execute([$id]);
    }
}

// Kembali ke halaman daftar pesanan
header("Location: list_pesanan.php");
exit;
?>
