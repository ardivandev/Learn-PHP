<?php

  $mahasiswa = [
    ['nama' => 'Aditya', 'alamat' => 'Cimahi', 'prodi' => 'informatika'],
    ['nama' => 'Fakhri', 'alamat' => 'Jakarta', 'prodi' => 'DKV'],
    ['nama' => 'Riasyah', 'alamat' => 'Bandung', 'prodi' => 'Akutansi']
  ]

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <style>
  * {
    font-family: Arial, Helvetica, sans-serif;
  }
  </style>
</head>

<body>
  <h2>Data Mahasiswa</h2>
  <table border="1" cellspacing="0" cellpadding="8">
    <tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Prodi</th>
    </tr>
    <?php foreach($mahasiswa as $value) : ?>
    <tr>
      <td><?= $value['nama']; ?></td>
      <td><?= $value['alamat']; ?></td>
      <td><?= $value['prodi']; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>
