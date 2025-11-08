<?php

  $umur = 17;
  $status = "pengangguran";

  if ($umur <= 17) {
    if ($status == "pelajar") {
      echo "Diskon 50%";
    } else {
      echo "Gak dapet cuy";
    }
  } else {
    echo "Gak dapet diskon";
  }

?>
