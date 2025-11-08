<?php

  // Ardivan192#$

  if (isset($_POST['daftar'])) {
  $nama = $_POST['nama'];
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $password = $_POST['password'];
  $konfirmasiPassword = $_POST['konfirmasipassword'];
  $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).+$/';

  if (!$email) {
    echo "Email tidak valid!";
    exit;
  }

  if (!file_exists("users.json")) {
    file_put_contents("users.json", "[]");
  }

  $data = json_decode(file_get_contents("users.json"), true);

  if ($password !== $konfirmasiPassword) {
    echo "Password tidak sama!";
  } else if (!preg_match($regex, $password)) {
    echo "Password harus ada huruf kecil, besar, angka, dan simbol!";
  } else {
    $data[] = [
      "nama" => $nama,
      "email" => $email,
      "password" => password_hash($password, PASSWORD_DEFAULT)
    ];

    file_put_contents("users.json", json_encode($data, JSON_PRETTY_PRINT));

    header("Location: login.php");
    exit;
  }
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <style>
  * {
    font-family: Arial, Helvetica, sans-serif;
  }
  </style>
</head>

<body>

  <h2>Daftar</h2>

  <form action="" method="post">
    <input type="text" name="nama" placeholder="nama...">
    <input type="email" name="email" placeholder="email...">
    <input type="password" name="password" placeholder="password...">
    <input type="password" name="konfirmasipassword" placeholder="konfirmasi password...">
    <button type="submit" name="daftar">Daftar</button>
  </form>

  <p>Sudah punya akun ? <a href="login.php">masuk</a></p>

</body>

</html>
