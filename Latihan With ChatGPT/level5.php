<?php

  $nilaiSiswa = [83,90,95,78,83,92,80,79,97,88];
  $nilaiTertinggiSiswa = max($nilaiSiswa);
  $nilaiTerendahSiswa = min($nilaiSiswa);
  echo "Nilai tertinggi siswa : $nilaiTertinggiSiswa <br> Nilai terendah siswa : $nilaiTerendahSiswa <br>";

  session_start();

  if (isset($_POST['tambah'])) {
    $item = $_POST['item'];
    if (isset($_SESSION["arrItem"])) {
      $arrItem = $_SESSION['arrItem'];
    } else {
      $arrItem = [];
    }

    array_push($arrItem, $item);
    $_SESSION['arrItem'] = $arrItem;
  }

  if (isset($_POST['hapus'])) {
    unset($_SESSION['arrItem']);
  }

  function acakKarakter($text) {
    return str_shuffle($text);
  }

  echo acakKarakter("HelloWorld");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level 5</title>
</head>

<body>

  <form action="" method="post">
    <textarea name="pesan" cols="30" rows="5">
    </textarea>
    <br>
    <input type="submit" value="Cek Jumlah Kata" name="cekKata">
  </form>

  <?php

    if (isset($_POST['cekKata'])) {
      $pesan = $_POST['pesan'];
      $jumlahKata = str_word_count($pesan);
      $pesanUpperCase = strtoupper($pesan);
      echo "<p>Jumlah kata nya ada : $jumlahKata</p>";
      echo "<p>$pesanUpperCase</p>";
    }

  ?>

  <br>

  <form action="" method="post">
    <input type="text" name="item">
    <input type="submit" value="Tambah Item" name="tambah">
    <input type="submit" value="Hapus Semua Item" name="hapus">
  </form>

  <ul>
    <?php

    if (isset($_SESSION['arrItem'])) {
      foreach ($_SESSION['arrItem'] as $key => $value) {
        echo "<li>$key : $value</li>";
      }
    }

    ?>
  </ul>

</body>

</html>
