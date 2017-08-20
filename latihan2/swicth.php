<html>
<body>

<?php
$tujuan = "New York";
echo "Biaya Perjalanan Menuju $tujuan adalah ";
 switch ($tujuan)
 {
   case "Las Vegas":
   echo " $500";
   break;

  case "Amsterdam":
  echo " $1500";
  break;

  case "Egypt":
  echo " $1750";
  break;

  case "aceh":
  echo " $700";
  break;

  default :
  echo " $900";
  break;

 }

// Pada sintaks di atas, nilai dari variabel akan dicek pada setiap option yang ada (terletak di bagian case).
// Jika ada option yang sama dengan nilai variabel,
// maka statement-statement di bawah option tersebutlah yang akan dijalankan.
// Bagian default adalah optional (boleh ada, boleh tidak)
?>

</body>
</html>
