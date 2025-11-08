<?php

  // 1
  function luasPersegiPanjang($p, $l) {
    return $p * $l;
  }
  // echo luasPersegiPanjang(10,2);

  // 2
  function sapa($nama) {
    return "Halo, nama kamu $nama";
  }
  // echo sapa("Ardivan");

  // 3
  function cekGanjilGenap($angka) {
    if ($angka % 2 == 0) {
      echo "Bilangan Genap";
    } else {
      echo "Bilangan Ganjil";
    }
  }

  // cekGanjilGenap(10);

  // 4
  $numbers = [10,20,30,40,50];

  function hitungRataRata($array) {
    $jumlahValueArray = 0;
    foreach ($array as $key => $value) {
      $jumlahValueArray += $value;
    }

    $ratarataArray = $jumlahValueArray / count($array);
    return $ratarataArray;
  }

  // echo hitungRataRata($numbers);

  // 5
  function cekPassword($password) {
    if (strlen($password) < 6) {
      echo "Lemah";
    } else if (strlen($password) >= 6 && strlen($password) <= 10) {
      echo "Sedang";
    } else {
      echo "Kuat";
    }
  }

  cekPassword("hellowor#73hd");

?>
