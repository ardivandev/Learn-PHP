<?php

  $todos = [];

  if (file_exists('todo.txt')) {
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
  }

  // Cek apakah ada data yang dikirim dari form
  if (isset($_POST['todo'])) {
    $data = $_POST['todo'];

    $todos[] = [
      'todo' => $data,
      'status' => 0
    ];

    $daftar_todo = serialize($todos);
    file_put_contents('todo.txt', $daftar_todo);
    header('location:todo.php');
  }

  if (isset($_GET['status'])) {
    $todos[$_GET['key']]['status'] = $_GET['status'];
    $daftar_todo = serialize($todos);
    file_put_contents('todo.txt', $daftar_todo);
    header('location:todo.php');
  }

  if (isset($_GET['hapus'])) {
    unset($todos[$_GET['key']]);
    $daftar_todo = serialize($todos);
    file_put_contents('todo.txt', $daftar_todo);
    header('location:todo.php');
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List App</title>
</head>

<body>

  <h1>Todo List App</h1>

  <!-- form input todo -->
  <form action="" method="post">
    <label for="">Input tugas hari ini</label>
    <input type="text" name="todo" id="">
    <button type="submit">Simpan</button>
  </form>

  <!-- list todo -->
  <ul>
    <?php foreach($todos as $key => $value) : ?>
    <li>
      <input type="checkbox" name="todo"
        onclick="window.location.href='todo.php?status=<?php echo ($value['status']==1)? '0':'1'; ?>&key=<?= $key; ?>'"
        <?php if($value['status'] == 1)  echo 'checked';?>>
      <label for="">
        <?php
          if ($value['status'] == 1) {
            echo "<del>" . $value['todo'] . "</del>";
          } else {
            echo $value['todo'];
          }
        ?>
      </label>
      <a href="todo.php?hapus=1&key=<?php echo $key; ?>"
        onclick="return confirm('Apakah kamu yakin mau hapus data ini?')">Hapus</a>
    </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>
