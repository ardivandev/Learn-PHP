<?php

  $warna = ["merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru","merah", "biru", "kuning", "hijau", "merah", "biru"];
  $jumlah = 0;
  $jumlahMerah = 0;
  $i = 0;

  // While
  // Cek kondisi baru ulangi
  // while ($i < 10) {
  //   echo "Nomor antrian ke-$i <br>";
  //   $i++;
  // }

  // while ($i < count($warna)) {
  //   if ($warna[$i] == 'biru') {
  //     $jumlah++;
  //   }
  //   $i++;
  // }

  // Do While
  // Jalanin dulu sekali dan cek kondisi
  do {
    if ($warna[$i] == 'merah') {
      $jumlahMerah++;
    }
    $i++;
  } while ($i < count($warna));

  // echo "Jumlah warna biru adalah $jumlah <br>";
  echo "Jumlah warna merah adalah $jumlahMerah";
?>
