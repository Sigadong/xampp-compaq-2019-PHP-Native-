<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");
  
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
           " - ".mysqli_connect_error());
  }
  
  //jalankan query
  $query = "SELECT * FROM mahasiswa";
  $hasil_query = mysqli_query($koneksi, $query);
  
  //periksa query, tampilkan pesan kesalahan jika gagal
  if(!$hasil_query){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }
  
  //jalankan query
  $query = "SELECT * FROM mahasiswa";
  $hasil_query = mysqli_query($koneksi, $query);
  
  //ambil dan tampilkan seluruh tabel mahasiswa
  while($data = mysqli_fetch_assoc($hasil_query))
  {
    echo "$data[nim] $data[nama] $data[tempat_lahir] ";
    echo "$data[tanggal_lahir] $data[fakultas] ";
    echo "$data[jurusan] $data[ipk]";
    echo "<br>";
  }
  
  // bebaskan memory 
  mysqli_free_result($hasil_query);
    
  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>