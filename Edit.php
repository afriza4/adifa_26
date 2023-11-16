<?php 
require 'function.php';

$w=$_GET['x'];
$ar=query("SELECT * FROM lab WHERE ID=$w")[0];

if(isset($_POST["submit"])){

$coon = mysqli_connect('localhost','root','','php');
$result=mysqli_query($coon,"UPDATE  lab SET RUANG = '$_POST[ruangan]'
WHERE ID = $w ");
echo "good";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form input,
        button,
        select{
            display: block;
            margin: 6px;
        }
    </style>
</head>
<body>
<a href="index.php">index</a>
    <div class="form">
        <option value=""></option>
        <form action="" method="post">
     
            <input type="hidden" name="id" value="<?= $ar["ID"]?>">
            <label for="">Pemesan</label>
            <input type="text" name="pesan" value="<?= $ar["PEMESAN"]?>">
            <label for="">Prodi</label>
            <input type="text" name="prodi" value="<?= $ar["PRODI"]?>">

           <select name="ruangan" id="">
            <option value="<?php echo $ar["RUANG"];?>"><?php $ar["RUANG"]; echo "---";?></option>
            <option value="Lab 1">Lab 1</option>
            <option value="Lab 2">Lab 2</option>
           </select>
           
           <select name="hari" id="">
            <option value="<?php echo $ar["HARI"]; ?>"><?php $ar["HARI"]; echo "-----";?></option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
           </select>

           <label for="">Tanggal</label>
           <input type="date" name="tanggal" value="<?= $ar["TANGGAL"] ?>">
           <label for="">Jam Mulai</label>
           <input type="time" name="mulai" value="<?= $ar["JAM MULAI"]?>">
           <label for="">Jam Selesai</label>
           <input type="time" name="selesai" value="<?= $ar["JAM AKHIR"] ?>">
           <label for="">Keterangan</label>
           <input type="text" name="keterangan" value="<?= $ar["KETERANGAN"] ?>">
           <label for="">Penanggung Jawab</label>
           <input type="text" name="jawab" value="<?= $ar["PENANGGUNG JAWAB"]?>">
           <button type="submit" name="submit">Tambah</button>
        </form>
    </div>
</html>