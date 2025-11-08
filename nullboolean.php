<?php

  // Null (Digunakan jika ada variabel yang belum ada valuenya maka gunakan null terlebih dahulu)
  $hasil = null;

  $a = 3;
  $b = 5;
  $hasil = $a + $b;
  echo $hasil;

  // Boolean
  // true dan false
  $isLogin = false;
  if ($isLogin) {
    echo "Selamat kamu sudah login";
  } else {
    echo "Silahkan login terlebih dahulu";
  }

?>
