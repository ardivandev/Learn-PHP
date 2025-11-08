<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 4</title>
</head>

<body>

  <?php

  if (isset($_POST['kirimNama'])) {
    $nama = $_POST["nama"];
    if (empty($nama)) {
      echo "<p style='color:red;'>Error nama tidak boleh kosong</p>";
    } else {
      echo "<p>Halo, $nama</p>";
    }
  }

  ?>

  <form action="" method="post">
    <input type="text" name="nama" placeholder="Masukan nama">
    <input type="submit" value="Submit" name="kirimNama">
  </form>

  <br>

  <?php

  if (isset($_POST["kirimUmur"])) {
    $umur = $_POST['umur'];
    if (!is_numeric($umur)) {
      echo "<p>$umur adalah Bukan Angka</p>";
    } else {
      echo "<p>$umur adalah Angka</p>";
    }
  }

  ?>

  <form action="" method="post">
    <input type="number" name="umur" placeholder="Masukan umur">
    <input type="submit" value="Submit" name="kirimUmur">
  </form>

  <br>

  <?php

  if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).+$/';

    if (strlen($password) < 6) {
       echo "<p style='color:red;'>Error password minimal 6 karakter</p>";
    } else {
      if (preg_match($regex, $password)) {
        echo "<p>Hello $username password kamu aman</p>";
      }
    }
  }

  ?>

  <form action="" method="post">
    <input type="text" name="username" placeholder="Masukan username">
    <input type="password" name="password" placeholder="Masukan password">
    <input type="submit" value="Submit" name="login">
  </form>

</body>

</html>
