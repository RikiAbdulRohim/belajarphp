<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <title>Latihan Form Penjualan</title>
  <style type="text/css">
  .light blue
  {
    color:#ADD8E6;
  }
  </style>
</head>

<body>
  <div align="center">
  <form id="form1" name="form2" method="post" action="proses.php">
  <p>&nbsp</p>
  <table width="385" heigh="202" border="1">
  <tr>
  <td colspan="2" bgcolor="#F08080">
  <div align="center" class="hitam">
  <strong>PENJUALAN</strong>
  </div>
  </td>
  </tr>

  <tr>
    <td width="125" bgcolor="#F08080">Nama Barang </td>
    <td width="245" bgcolor="#F08080">&nbsp;
    <input name="nama_barang" type="text" /></td>
  </tr>

  <tr>
    <td bgcolor="#F08080">Harga</td>
    <td bgcolor="#F08080">&nbsp;
    <input name="harga" type="text" /></td>
  </tr>

  <tr>
    <td bgcolor="#F08080">Quanty</td>
    <td bgcolor="#F08080">&nbsp;
    <input name="jumlah" type="text" /></td>
  </tr>

  <tr>
    <td bgcolor="#F08080">Status</td>
    <td bgcolor="#F08080"><p>
    <label>
    <input type="radio" name="status" value="Pelanggan" id="status_0" checked="checked"/>Pelanggan
   </label>

   <label>
     <input type="radio" name="status" value="Bukan Pelanggan" id="status_1"/>
     Bukan Pelanggan
   </label>
   <br />
 </p></td>
 </tr>

 <tr>
   <td bgcolor="#F08080">kota</td>
   <td bgcolor="#F08080"><select name="kota">
    <option>Jakarta</option>
    <option>Bandung</option>
    <option>Garut</option>
    </select>&nbsp;</td>
</tr>

<tr>
  <td height="25" bgcolor="#F08080">&nbsp;</td>
  <td bgcolor="#F08080">
  <input name="" type="submit" value="Hitung"/>&nbsp;
  <input name="" type="reset" value="Hapus" /> </td>
</tr>
</table>
</form>
</div>
</body>
</html>
