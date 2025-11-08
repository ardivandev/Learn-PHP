<?php

  // 1
  echo "Halo, saya belajar PHP <br>";

  // 2
  $nama = "Ardivan";
  $umur = 18;
  echo "Nama saya $nama, umur saya $umur tahun <br>";

  // 3
  $angka1 = 10;
  $angka2 = 2;
  echo "Hasil dari $angka1 + $angka2 : ", $angka1 + $angka2 . "<br>";
  echo "Hasil dari $angka1 - $angka2 : ", $angka1 - $angka2 . "<br>";
  echo "Hasil dari $angka1 * $angka2 : ", $angka1 * $angka2 . "<br>";
  echo "Hasil dari $angka1 / $angka2 : ", $angka1 / $angka2 . "<br>";

  // 4
  if ($umur >= 17) {
    echo "Dewasa <br>";
  } else {
    echo "Belum Dewasa <br>";
  }

  // 5
  $hari = 10;
  switch ($hari) {
    case 1:
      echo "Hari Senin";
      break;
    case 2:
      echo "Hari Selasa";
      break;
    case 3:
      echo "Hari Rabu";
      break;
    case 4:
      echo "Hari Kamis";
      break;
    case 5:
      echo "Hari Jum'at";
      break;
    case 6:
      echo "Hari Sabtu";
      break;
    case 7:
      echo "Hari Minggu";
      break;
    default:
      echo "Angka hari tidak valid";
      break;
  }

?>
