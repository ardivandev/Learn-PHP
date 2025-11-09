<?php

  $mahasiswa = [
    ['nama' => 'Aditya Fakhri', 'prodi' => 'Informatika'],
    ['nama' => 'Kevin', 'prodi' => 'Kedokteran'],
    ['nama' => 'Beckham', 'prodi' => 'DKV'],
    ['nama' => 'Ole Romeny', 'prodi' => 'PGSD'],
  ];

  // $data =  serialize($mahasiswa);
  // file_put_contents("data.txt", $data);

  // $hasil = unserialize(file_get_contents("data.txt"));
  // print_r($hasil);

  $data = json_encode($mahasiswa);
  file_put_contents("data.txt", $data);

  $output = json_decode(file_get_contents("data.txt"));
  print_r($output);


?>
