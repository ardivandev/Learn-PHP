<?php

  // 1
  for ($i=1; $i <= 20 ; $i++) {
    echo "$i ";
  }

  echo "<br>";

  // 2
  for ($i=1; $i <= 50 ; $i++) {
    if ($i % 2 == 0) {
      echo "$i ";
    }
  }

  echo "<br>";

  $buah = ["apel", "jeruk", "semangka", "pisang", "pepaya", "alpukat", "mangga", "anggur", "manggis", "kelapa"];

  // 3
  foreach ($buah as $key => $value) {
    echo "$key : $value <br>";
  }

  // 4
  array_push($buah, "durian");
  foreach ($buah as $key => $value) {
    echo "$key : $value <br>";
  }

  // 5
  $mahasiswa = [
    ['nama' => "Ardivan", "jurusan" => "RPL", "angkatan" => 2022],
    ['nama' => "Boy", "jurusan" => "Kedokteran", "angkatan" => 2023],
    ['nama' => "Dimas", "jurusan" => "Hukum", "angkatan" => 2024],
    ['nama' => "Akbar", "jurusan" => "Kimia", "angkatan" => 2025],
  ];

  foreach ($mahasiswa as $key => $value) {
    echo "Nama : " . $value["nama"] . ", Jurusan : " . $value["jurusan"] . ", Angkatan : " . $value["angkatan"] . "<br>";
  }

?>
