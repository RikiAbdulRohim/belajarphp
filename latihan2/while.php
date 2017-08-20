<html>
<body>

<?php
 $harga_sikat = 1500;
 $jumlah_sikat = 10;
 echo "<table border=\"1\" align=\"center\">";
 echo "<tr><td><b>Jumlah Sikat</b></td>";
 echo "<td><b>Harga</b></tr></td>";

while ( $jumlah_sikat <= 100 )
  {
    echo "<tr><td>";
    echo $jumlah_sikat;
    echo "</td><td>";
    echo "Rp. ".$harga_sikat * $jumlah_sikat;
    echo "</td></tr>"; $jumlah_sikat = $jumlah_sikat + 10;
  }
  echo "</table>";

//Pada sintaks di atas, selama syarat bernilai TRUE maka statement-statement di dalam
//  while akan terus dijalankan secara berulang-ulang.
  // Perulangan baru akan berhenti apabila syarat bernilai FALSE.
  // Sebelum statement yang diulang-ulang dilakukan,
  // terlebih dahulu akan dicek syarat nya apakah bernilai TRUE atau FALSE.
  // Apabila TRUE maka statement akan dijalankan. Sedangkan apabila FALSE,
  // perulangan akan langsung berhenti.
  // Dengan kata lain, statement dalam WHILE bisa jadi tidak akan pernah dilakukan,
  // yaitu apabila syaratnya langsung bernilai FALSE

?>

</body>
</html>
