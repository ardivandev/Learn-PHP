<?php
session_start();

if (!isset($_SESSION['listGambar'])) {
  $_SESSION['listGambar'] = [];
}

if (isset($_POST['uploadfile'])) {
  $nama_file = time() . "_" . $_FILES['foto']['name'];
  $tmp_file = $_FILES['foto']['tmp_name'];
  $type_file = $_FILES['foto']['type'];
  $size_file = $_FILES['foto']['size'];
  $maxSize = 1024 * 1024;

  if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
  }

  if (getimagesize($tmp_file) !== false) {
    if ($type_file == 'image/jpeg' || $type_file == 'image/png') {
      if ($size_file < $maxSize) {
        $folder = 'uploads/' . $nama_file;
        move_uploaded_file($tmp_file, $folder);
        echo "Upload file berhasil";
        $_SESSION['listGambar'][] = $folder;
      } else {
        echo "Tidak boleh lebih dari 1MB";
      }
    } else {
      echo "Hanya boleh JPG atau PNG!";
    }
  } else {
    echo "Bukan Gambar";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Upload File</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="foto">
    <input type="submit" value="Upload File" name="uploadfile">
  </form>

  <ul>
    <?php
        if (isset($_SESSION['listGambar'])) {
          foreach ($_SESSION['listGambar'] as $gambar) {
            echo "<li><img src='$gambar' width='150' style='margin:5px;'></li>";
          }
        }
      ?>
  </ul>

</body>

</html>
