<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $nilai = array(98, 59, 42, 65, 87);
  echo array_sum($nilai); // 351
  echo "<br>";
  
  $nilai = array(9.8, 5.9, 4.2);
  echo array_sum($nilai); // 19.9
  echo "<br>";
  
  $nilai = array("anton" => 82, "rudy" => 81,"rini" => 95);
  $nilai_rata2 = array_sum($nilai)/count($nilai);
  echo "Nilai rata-rata siswa : $nilai_rata2"; 
  //Nilai rata-rata siswa : 86 
?>
</body>
</html>