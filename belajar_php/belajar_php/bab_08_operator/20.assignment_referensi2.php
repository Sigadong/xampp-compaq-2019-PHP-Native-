<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a = 99;
  $b = "Belajar PHP";
  $c =& $b;
  
  echo "$a , $b , $c"; // 99 , Belajar PHP , Belajar PHP
  echo "<br>";
  
  $c = "Operator Assignment";
  echo "$a , $b , $c"; // 99 , Operator Assignment , Operator Assignment
?> 
</body>
</html>