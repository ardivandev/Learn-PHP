<?php

  // Global = Variabel yang dibuat diluar fungsi, yang hanya bisa dipakau diluar fungsi
  // Lokal = Variabel yang dibuat didalam fungsi, hanya bisa dipakai dalam fungsi itu saja

  $nama = 'ardivan';

  function halo() {
    global $nama;
    echo "Halo $nama, apa kabarmu hari ini?";
  }

  halo();

?>
