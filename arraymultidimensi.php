<?php

  // Simpelnya array multidimensi adalah array yang didalamnya ada array

  $mahasiswa = [
    [
      'nama' => "Ardivan",
      "umur" => 18,
      "jurusan" => "Rekayasa Perangkat Lunak"
    ],
    [
      'nama' => "Badrul",
      "umur" => 17,
      "jurusan" => "Analis Kimia"
    ],
    [
      'nama' => "Abi",
      "umur" => 19,
      "jurusan" => "Teknik Komputer Jaringan"
    ],
  ];

  // Cari indeks, kemudian cari key nya yaitu jurusan
  echo $mahasiswa[1]['jurusan'];

?>