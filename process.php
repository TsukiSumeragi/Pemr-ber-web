<?php
if (isset($_POST["jumlah"])) {
    $jumlah = $_POST["jumlah"];
    $kelas = $_POST["kelas"];
    $ongkos = 0;

    if ($kelas == "vvip") {
        $ongkos = 400000;
    } elseif ($kelas == "vip") {
        $ongkos = 300000;
    } elseif ($kelas == "bisnis") {
        $ongkos = 200000;
    } else {
        $ongkos = 100000;
    }

    if ($ongkos > 0) {
        $total = $jumlah * $ongkos;
        echo "<h3>Total Bayar: Rp " . number_format($total, decimals: 0, decimal_separator: ',', thousands_separator: '.') . "</h3>";
    }
}
?>