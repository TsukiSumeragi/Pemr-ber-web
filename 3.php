<html>
<body>
<?php
$vjumlah = $_POST['txtjumblah'];
$vharga = $_POST['txtharga'];
$vdiskon = $_POST['txtdiskon'];

$bayar = $vjumblah * $vharga;
$hasildiskon = $bayar * $vdiskon / 100;
$bayar2 = $bayar - $hasildiskon;

echo "Jumlah Barang = $vjumlah<br>";
echo "Harga Barang = $vharga<br>";
echo "Total Bayar = $bayar";
?>
</body>
</html>