<?php

  $nama = $_GET['nama'];
  $alamat = $_GET['alamat'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>

  <form action="" method="get">
    <input type="text" name="nama" placeholder="nama">
    <input type="text" name="alamat" placeholder="alamat">
    <input type="submit" value="submit">
  </form>

  <h1>Selamat Datang, <?= $nama; ?>!</h1>
  <h3>Alamatnya di <?= $alamat; ?></h3>
  <p>Kita akan belajar dasar PHP</p>
</body>

</html>