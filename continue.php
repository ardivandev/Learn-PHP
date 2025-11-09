<?php

$warna = ["merah", "hitam", "hijau", "kuning", "biru", "putih", "ungu", "merah", "hitam", "hijau", "kuning", "biru", "putih", "ungu"];

foreach ($warna as $key => $value) {
  if ($value == "hitam") {
    continue; // Di lewat ges bukan di berhentikan
  }

  echo "Warna pada elemen array ke-$key adalah $value <br>";
}

?>
