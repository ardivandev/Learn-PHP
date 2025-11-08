<?php

  // IF
  $nilai = 80;
  if ($nilai >= 75) {
    echo "Kamu Lulus";
  } else {
    echo "Kamu Tidak Lulus";
  }

  // IF ELSE IF
  if ($nilai >= 90) {
    echo "Nilai kamu A";
  } else  if ($nilai >= 80 && $nilai <= 89) {
    echo "Nilai kamu B";
  } else if ($nilai >= 70 && $nilai <= 79) {
    echo "Nilai kamu C";
  } else {
    echo "Nilai tidak valid!";
  }

?>
