<?php
$coon=mysqli_connect('localhost','root','','php');
function query($query){
    global $coon;
    $result=mysqli_query($coon,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function cari($key){
    $cari="SELECT * FROM lab WHERE
    PEMESAN = '$key'
    ";
    return query($cari);
}

                    // <th>PEMESAN</th>
                    // <th>PRODI</th>
                    // <th>RUANG LAB</th>
                    // <th>HARI</th>
                    // <th>TANGGAL</th>
                    // <th>JAM MULAI</th>
                    // <th>JAM AKHIR</th>
                    // <th>KETERANGAN</th>
                    // <th>PENANGGUNG JAWAB</th>  
function tambah($data){
    $pesan=$data["pemesan"];
    $pro=$data["prodi"];
    $ruang=$data["ruangan"];
    $hari=$data["hari"];
    $tanggal=$data["tanggal"];
    $mulai=$data["mulai"];
    $selesai=$data["selesai"];
    $keterangan=$data["keterangan"];
    $jawab=$data["jawab"];
    global $coon;
    $result=mysqli_query($coon,"INSERT INTO lab VALUES 
    ('','$pesan','$pro','$ruang','$hari','$tanggal','$mulai','$selesai','$keterangan','$jawab')
    ");
    return $result;
}



function Edit($data){
    $pesan=$data["pesan"];
    $pro=$data["prodi"];
    $ruang=$data["ruang"];
    $hari=$data["hari"];
    $tanggal=$data["tanggal"];
    $mulai=$data["mulai"];
    $selesai=$data["selesai"];
    $keterangan=$data["keterangan"];
    $jawab=$data["jawab"];
    $id=$data["id"];
    global $coon;
   $ubah="UPDATE lab SET
    PEMESAN='$pesan',
    PRODI='$pro',
    RUANG LAB='$ruang',
    HARI='$hari',
    TANGGAL='$tanggal',
    JAM MULAI='$mulai',
JAM SELESAI='$selesai',
KETERANGAN='$keterangan',
PENANGGUNG JAWAB='$jawab'
WHERE ID = $id
    ";
    $result=mysqli_query($coon,$ubah);
   return mysqli_affected_rows($coon);
}
