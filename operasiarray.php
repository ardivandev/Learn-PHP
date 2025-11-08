<?php

  // Operasi Array
  $buah = ["apel", "semangka", "jeruk", "tomat"];
  $sayuran = ["wortel", "kangkung", "bayam", "tomat"];

  // Cara Menambah Nilai Array
  array_push($buah, "mangga");

  // Cara Menghapus Nilai Array
  array_pop($buah);

  // Cara Menggabungkan Array
  $tanaman = array_merge($buah, $sayuran);
  // Cara Menampilkan Value Buah yang tidak ada di Value Sayuram
  $tanaman2 = array_diff($buah, $sayuran);
  // Cara menampilkan value buah yang ada di sayuran
  $tanaman3 = array_intersect($buah, $sayuran);

  // Menghitung jumlah value yang ada pada array tanaman
  echo count($tanaman);

  // Mencari value pada sebuah array
  // Akan mengembalikan indeks array
  echo  array_search("apel", $buah);

  // Menampilkan array dengan separator yaitu (,)
  echo implode(", ", $tanaman3);

?>