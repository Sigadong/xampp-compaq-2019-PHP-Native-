<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
Pilih Tanggal : 
<select name="tgl">
  <?php
    for ($i = 1; $i <= 31; $i++)  {
      echo "<option value = $i > $i </option>";
    }
  ?>
</select>

Pilih Bulan : 
<select name="bln">
  <?php
    for ($i = 1; $i <= 12; $i++)  {
      echo "<option value = Bulan-$i > Bulan-$i </option>";
    }
  ?>
</select>

Pilih Tahun : 
<select name="thn">
  <?php
    for ($i = 1960; $i <= 2015; $i++)  {
      echo "<option value = $i > $i </option>";
    }
  ?>
</select>
</body>
</html>