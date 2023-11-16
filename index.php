<?php 
session_start();
require 'function.php';
if(!isset($_SESSION["login"])==true){
    header("Location:login.php");
    exit;
}
if(!isset($_COOKIE['key'])){
    header("Location:index2.php");
    exit;
}
$array=query("SELECT * FROM lab");

if(isset($_POST["car"])){
  $array = cari($_POST["key"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2><a href="Logout.php">Log out</a></h2>
    <h2><a href="tambah.php">Tambah</a></h2>
    
    <form action="" method="post">
        <input type="text" name="key">
        <button type="submit" name="car">Cari</button>
    </form>
    <div class="table">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Aksi</th>
                    <th>PEMESAN</th>
                    <th>PRODI</th>
                    <th>RUANG LAB</th>
                    <th>HARI</th>
                    <th>TANGGAL</th>
                    <th>JAM MULAI</th>
                    <th>JAM AKHIR</th>
                    <th>KETERANGAN</th>
                    <th>PENANGGUNG JAWAB</th>
                  
                </tr>
            </thead>
            <?php $i=1 ?>
            <?php foreach($array as $ar):?>
            <tbody>
                <tr>
                    <td><?= $i ?></td>
                    <td><a href="Edit.php?x=<?= $ar["ID"]?>">Edit</a>||<a href="Hapus.php?p=<?= $ar["ID"]?>">Delete</a></td>
                    <td><?= $ar["PEMESAN"]?></td>
                    <td><?= $ar["PRODI"]?></td>
                    <td><?= $ar["RUANG"]?></td>
                    <td><?= $ar["HARI"]?></td>
                    <td><?= $ar["TANGGAL"]?></td>
                    <td><?= $ar["JAM MULAI"]?></td>
                    <td><?= $ar["JAM AKHIR"] ?></td>
                    <td><?= $ar["KETERANGAN"] ?></td>
                    <td><?= $ar["PENANGGUNG JAWAB"] ?></td>
                <?php $i++ ?>
                <?php endforeach;?>
                </tr>
            </tbody>
            
        </table>
    </div>
</body>
</html>