<?php 
session_start();
require 'function.php';
if(!isset($_SESSION["login"])){
    header("Location:login.php");
}

if(isset($_POST["submit"])){
    if(tambah($_POST)){
        echo "berhasil";
    }else{
        echo "gagal";
    }
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
        <form action="" method="post">
            <label for="">Pemesan</label>
            <input type="text" name="pemesan">
            <label for="">Prodi</label>
            <input type="text" name="prodi">
           <select name="ruangan" id="">
            <!-- <option value="">Pilih Ruang Lab</option> -->
            <option value="">Pilih Lab</option>
            <option value="Lab 1">Lab 1</option>
            <option value="Lab 2">Lab 2</option>
           </select>
           <select name="hari" id="">
            <option value="">Pilih Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
           </select>
           <label for="">Tanggal</label>
           <input type="date" name="tanggal">
           <label for="">Jam Mulai</label>
           <input type="time" name="mulai">
           <label for="">Jam Selesai</label>
           <input type="time" name="selesai">
           <label for="">Keterangan</label>
           <input type="text" name="keterangan">
           <label for="">Penanggung Jawab</label>
           <input type="text" name="jawab">
           <button type="submit" name="submit">Tambah</button>
        </form>
    </div>
</html>