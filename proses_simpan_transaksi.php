<?php
//proses_simpan_transaksi.php
session_start();
include 'cek_session.php';
include 'config/koneksi.php';

if (empty($_SESSION['keranjang'])) {
    $_SESSION['pesan_error'] = 'keranjang masih kosong!';
    header('Location: transaksi.php');
    exit;
}

$id_kasir = $_SESSION['id_user'];
$no_transaksi = 'TRX-' . date('YmdHis');
$tanggal = date('Y-m-d H:i:s');

$total = 0;
foreach ($_SESSION['keranjang'] as $item) {
    $total += $item['subtotal'];
}

