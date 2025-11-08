<?php

  if (isset($_POST['upload'])) {
    // Ambil nama dan tmp dari file
    $nama_file = $_FILES['foto']['name'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    var_dump($_FILES['foto']);

    $folder = "images/" . $nama_file;

    // Kalau belum ada foldernya
    if (!is_dir('images')) {
      mkdir('images', 0777, true);
    }

    move_uploaded_file($tmp_file, $folder);
    echo "Upload berhasil! file tersimpan di : " . $folder;
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="nama" placeholder="Nama User">
    <input type="text" name="alamat" placeholder="Alamat User">
    <input type="file" name="foto">
    <input type="submit" value="submit" name="upload">
  </form>

</body>

</html>
