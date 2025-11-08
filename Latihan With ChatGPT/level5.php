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
      echo "<p>Jumlah kata nya ada : $jumlahKata</p>";
    }

  ?>

</body>

</html>
