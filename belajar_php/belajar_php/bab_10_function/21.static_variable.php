<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  function coba()
  {
    $a=0;
    $a=$a+1;
    return "Ini adalah pemanggilan ke-$a fungsi coba() <br />";
  }
    
  echo coba();    // Ini adalah pemanggilan ke-1 fungsi coba() 
  echo coba();    // Ini adalah pemanggilan ke-1 fungsi coba() 
  echo coba();    // Ini adalah pemanggilan ke-1 fungsi coba() 
  echo coba();    // Ini adalah pemanggilan ke-1 fungsi coba() 
?>
</body>
</html>