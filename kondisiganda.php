<?php

  $ukuran = "XL";
  $warna = "merah";
  $harga = 70000;

  if ($ukuran == "XL" && $warna == "merah") {
    $biaya_tambahan = 5000;
    $total_biaya = $harga + $biaya_tambahan;

    echo "Biaya yang dikenakan adalah : Rp.$total_biaya";
  } else {
    echo "Biaya yang dikeluarkan adalah : Rp.$harga";
  }

?>
