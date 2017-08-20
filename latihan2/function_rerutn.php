<html>
<body>

<?php

function Jumlahkan($x, $y)
{
  $hasil = $x + $y;
  return $hasil;
}
  $bil = 0;
  echo "Nilai bil mula-mula adalah ". $bil ."<br>";
  $bil = Jumlahkan(3, 4);
  echo "Nilai bil setelah memanggil function adalah " . $bil ."<br>";

  // Function Jumlahkan() di atas mengembalikan nilai dari variabel $hasil
  // yang merupakan hasil penjumlahan dari nilai $x dan $y
  // Sedangkan perintah $bil = Jumlahkan(3, 4);bermakna nilai yang dikembalikan
  // function Jumlahkan(3, 4) disimpan pada variabel $bil (dalam hal ini nilai $bil adalah 7)
?>



</body>
</html>
