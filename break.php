<?php

$warna = ["merah", "hitam", "hijau", "kuning", "biru", "putih", "ungu", "merah", "hitam", "hijau", "kuning", "biru", "putih", "ungu"];

echo "Saya mau cari warna hitam <br>";

foreach ($warna as $key => $value) {
  echo "Warna pada elemen array ke-$key adalah $value <br>";

  if ($value == "hitam") {
    echo "<br>Nah, warna hitam udah ketemu nih di indeks ke-$key";
    break; // diberhentikan
  }
}

?>
