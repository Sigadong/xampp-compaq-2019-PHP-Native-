<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php    
  $hasil = preg_match("/^[A-Z]{3}[0-9]{2}$/", "AAA01");
  echo $hasil."<br>";    // 0
  
  $hasil = preg_match("/^[A-Z]{3}[0-9]{2}$/", "zzAAA01zz");
  echo $hasil."<br>";    // 0
?>
</body>
</html>