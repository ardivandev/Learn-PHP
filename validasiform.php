<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validasi Form</title>
</head>

<body>

  <form action="" method="post">
    <input type="text" name="nama" placeholder="nama">
    <input type="text" name="alamat" placeholder="alamat">
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="kirim">Kirim</button>
  </form>

  <?php

  if (isset($_POST['kirim'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];

    if (empty($nama) || empty($alamat) || empty($password)) {
      echo "nama, alamat, dan password harus diisi!";
    } else if (strlen($password) < 8 || !preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[!@#$%^&*]/', $password)) {
      echo "password harus sesuai, minimal 8 karakter, harus memiliki huruf kecil, harus memiliki huruf besar, harus memiliki angka, dan harus memiliki simbol  (!@#$%^&*)";
    } else {
      echo "<p>Halo : $nama</p>";
      echo "<p>Alamat kamu di : $alamat</p>";
      echo "<p>Password kamu adalah : $password</p>";
    }
  }

  ?>

</body>

</html>
