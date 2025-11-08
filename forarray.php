<?php

  $warna = ["merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru"];
  $jumlah = 0;

  for ($i=0; $i < count($warna); $i++) {
    if ($warna[$i] == 'merah') {
      $jumlah++;
    }
  }

  echo "Jumlah warna merah adalah $jumlah";

?>
