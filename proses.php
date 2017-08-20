<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Latihan From Penjualan</title>
<style type="text/css">
.light blue
{
  color:#ADD8E6;
}
</style>
</head>
<body>

<?php

$nama_barang = $_POST['nama_barang'];
$harga = $_POST ['harga'];
$jumlah = $_POST ['jumlah'];
$status = $_POST ['status'];
$kota = $_POST ['kota'];

$subtotal = $harga * $jumlah ;
switch ($status)
  {
    case "Pelanggan":
     $diskon = $subtotal * 0.1;
    break;
    default;
     $diskon = 0;
  }

if ($kota == "Jakarta") {
   $ongkos = 25000;
}
else if ($kota == "Bandung")
{
  $ongkos= 15000;
}
else if ($kota == "Garut")
{
  $ongkos= 10000;
}

$total = $subtotal - $diskon + $ongkos;

?>

<div align="center">
<table width="280" border="1">
<tr>
<td colspan="2" bgcolor="#F08080">
<div align="center" class="merah">
<strong>HASIL PERHITUNGAN</strong>
</div>
</td>
</tr>

<tr>
<td width="116" bgcolor="#F08080">Nama Barang</td>
<td width="165" bgcolor="#F08080">&nbsp;
<?php echo "$nama_barang"; ?></td>
</tr>
<tr>
<td bgcolor="#F08080">Harga</td>
<td bgcolor="#F08080">&nbsp;
<?php echo "Rp. ".number_format($harga); ?></td>
</tr>
<tr>
<td bgcolor="#F08080">Quantity</td>
<td bgcolor="#F08080">&nbsp;
<?php echo "$jumlah"; ?></td>
</tr>
<tr>
<td bgcolor="#F08080">Subtotal</td>
<td bgcolor="#F08080">&nbsp;
<?php echo "Rp. ".number_format($subtotal); ?></td>
</tr>
<tr>
<td bgcolor="#F08080">Status</td>
<td bgcolor="#F08080">&nbsp;
<?php echo "$status"; ?></td>
</tr>
<tr>
<td bgcolor="#F08080">Diskon</td>
<td bgcolor="#F08080">&nbsp;
<?php echo "Rp. ".number_format($diskon); ?></td>
</tr>
<tr>
<td bgcolor="#F08080">Ongkos Kirim</td>
<td bgcolor="#F08080">&nbsp;
<?php echo "Rp. ".number_format($ongkos)?>
<?php echo " ( $kota )";?></td>
</tr>
<tr>
<td bgcolor="#F08080" class="merah">
<strong>Total</strong></td>
<td bgcolor="#E0FFFF">&nbsp;
<?php echo "Rp. ".number_format($total); ?></td>
</tr>
</table>
<a href="index.php"> &lt;&lt; Kembali</a><br />
</div>
</body>
</html>
