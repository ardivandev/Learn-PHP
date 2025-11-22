<?php

  $dataBukuTamu = [];

  // Cek File
  if (file_exists('data.json')) {
    $isi_file = json_decode(file_get_contents('data.json'), true);
    if (is_array($isi_file)) {
        $dataBukuTamu = $isi_file;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <div class="mt-4 p-3">
    <?php if (isset($_GET['success'])) {
        echo "<p style='color:green;'>Data berhasil diupdate!</p>";
    } ?>
    <?php if (isset($_GET['successdelete'])) {
        echo "<p style='color:green;'>Data berhasil dihapus!</p>";
    } ?>
    <h2 class="mb-4">Daftar Data Buku Tamu</h2>
    <p><a class="link-opacity-50-hover text-decoration-none" href="index.php">Tambah Data</a></p>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Pesan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($dataBukuTamu as $key => $value) : ?>
        <tr>
          <th scope="row"><?= $key + 1; ?></th>
          <td><?= $value['nama']; ?></td>
          <td><?= $value['email']; ?></td>
          <td><?= $value['pesan']; ?></td>
          <td>
            <?php
              echo "<a class='link-opacity-50-hover text-decoration-none' href='edit.php?key=$key'>Edit Data</a> |
              <a class='link-opacity-50-hover text-decoration-none' href='delete.php?key=$key'>Hapus Data</a>"
            ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
</body>

</html>
