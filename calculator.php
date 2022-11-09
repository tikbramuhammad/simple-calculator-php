<?php

  // Logic PHP

  if (isset($_POST["submit"]))
  {
    $drop = $_POST["drop"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    switch ($drop)
    {
      case "tambah":
        $num3 = $num1 + $num2;
        break;
      case "kurang":
        $num3 = $num1 - $num2;
        break;
      case "kali":
        $num3 = $num1 * $num2;
        break;
      case "bagi":
        $num3 = $num1 / $num2;
        break;
      default:
        $num3 = "Pilih operasi dulu, Woi!!";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- MY CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- MY FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Poppins:wght@200&display=swap" rel="stylesheet">

  <title>PHP CALCULATOR</title>
</head>
<body>
  <div class="container">

  <h3>PHP CALCULATOR</h3>

  <form action="" method="POST">
    <input type="text" name="num1" placeholder="Masukkan angka pertama" value="<?= @$num1 ?>">
    <input type="text" name="num2" placeholder="Masukkan angka kedua" value="<?= @$num2 ?>">
    <select name="drop">
      <option>PILIH OPERASI</option>
      <option value="tambah">TAMBAH</option>
      <option value="kurang">KURANG</option>
      <option value="kali">KALI</option>
      <option value="bagi">BAGI</option>
    </select>

    <input type="submit" name="submit">

    <h5>HASIL OPERASI : 

      <br>
      <span><?= @$num3 ?></span>

    </h5>
  </form>

  </div>
</body>
</html>