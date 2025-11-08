<?php

  $buah = [
    "Apel",
    "Jeruk",
    "Melon",
    "Semangka"
  ];

  // echo $buah; Jika ingin mengecek value dari array gunakan print_r atau var_dump, gunakan echo jika ingin menampilkan value dari array tapi hanya 1
  // var_dump($buah);

  // Kenapa tidak apel karena indeks array dimulai dari angka 0
  // echo $buah[1];

  // Array Asosiatif
  // Seperti objek pada javascript
  $mahasiswa = ["nama" => "Ardivan", "umur" => 18, "hobi" => "Main game", "warnafavorit" => "Biru"];

  echo "Halo nama saya adalah ", $mahasiswa['nama'];

?>