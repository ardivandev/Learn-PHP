<?php

  // file_put_contents("namafile.txt", "Isi file");
  // file_get_contents();

  $pesan = "Ini belajar di kelasfullstack";
  file_put_contents("main.txt", $pesan, FILE_APPEND);

  $isi_file = file_get_contents("main.txt");
  echo $isi_file;

?>
