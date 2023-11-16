<?php
require 'function.php';
$t=$_GET["p"];
$coon=mysqli_connect('localhost','root','','php');
$result=mysqli_query($coon,"DELETE FROM lab WHERE ID = $t");
echo "berhasil";
// if(hapus($t)){
//     echo "hapus";
// }
// function hapus($u){
//     global $coon;
//     $result=mysqli_query($coon,"DELETE FROM lab WHERE ID=$u");
//     return $result;
// }