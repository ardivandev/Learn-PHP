<?php

  if (isset($_POST['masuk'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!file_exists("users.json")) {
      echo "Belum ada data pengguna.";
      exit;
    }

    $data = json_decode(file_get_contents("users.json"), true);

    $userDitemukan = false;

    foreach ($data as $user) {
      if ($user['email'] === $email) {
        if (password_verify($password, $user['password'])) {
          $userDitemukan = true;

          session_start();
          $_SESSION['nama'] = $user['nama'];
          $_SESSION['email'] = $user['email'];

          header("Location: dashboard.php");
          exit;
        }
      }
    }

    if (!$userDitemukan) {
      echo "Email atau password salah!";
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

  <h2>Masuk</h2>

  <form action="" method="post">
    <input type="email" name="email" placeholder="email...">
    <input type="password" name="password" placeholder="password...">
    <button type="submit" name="masuk">Masuk</button>
  </form>

  <p>Sudah punya akun ? <a href="registrasi.php">daftar</a></p>

</body>

</html>
