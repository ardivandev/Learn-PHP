<?php

  $dataBukuTamu = [];

  // Cek File
  if (file_exists('data.json')) {
    $isi_file = json_decode(file_get_contents('data.json'), true);
    if (is_array($isi_file)) {
      $dataBukuTamu = $isi_file;
    }
  }

  // Ketika Tombol Submit Di Click
  if (isset($_POST['submit'])) {
    $nama = trim(htmlspecialchars($_POST['nama']));
    $email = trim(htmlspecialchars($_POST['email']));
    $pesan = trim(htmlspecialchars($_POST['pesan']));

    // Cek apakah user memberikan input kosong
    if (empty($nama) || empty($email) || empty($pesan)) {
      header("Location:index.php?hasvalue=1");
      exit;
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:index.php?notemail=1");
        exit;
      } else {
        $data = [
          "nama" => $nama,
          "email" => $email,
          "pesan" => $pesan
        ];
        $dataBukuTamu[] = $data;
        file_put_contents('data.json', json_encode($dataBukuTamu, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        header("Location:index.php?success=1");
        exit;
      }
    }

  }



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Tambah Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
      <?php if (isset($_GET['success'])) {
        echo "<p style='color:green;'>Data berhasil disimpan!</p>";
      } ?>
      <?php if (isset($_GET['hasvalue'])) {
        echo "<p style='color:red;'>Error, nilai tidak boleh ada yang kosong</p>";
      } ?>
      <?php if (isset($_GET['notemail'])) {
        echo "<p style='color:red;'>Error, email tidak valid</p>";
      } ?>
      <h2 class="mb-4">Form Tambah Data Buku Tamu</h2>
      <p><a class="link-opacity-50-hover text-decoration-none" href="list.php">List Data</a></p>
      <form action="" method="post">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>
