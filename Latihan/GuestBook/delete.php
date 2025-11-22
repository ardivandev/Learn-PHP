<?php

  $dataBukuTamu = [];

  // Cek File
  if (file_exists('data.json')) {
    $isi_file = json_decode(file_get_contents('data.json'), true);
    if (is_array($isi_file)) {
      $dataBukuTamu = $isi_file;
    }
  }

  $index = $_GET['key'] ?? null;
  unset($dataBukuTamu[$index]);

  $dataBukuTamu = array_values($dataBukuTamu);

  file_put_contents('data.json', json_encode($dataBukuTamu, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
  header("Location:list.php?successdelete=1");
  exit;

?>
