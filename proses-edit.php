<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $kode=$_POST['id'];
    $nama_ruang=$_POST['nama_ruang'];
    $jenis_ruang=$_POST['jenis_ruang'];
    $kondisi=$_POST['kondisi'];

    $sql = "UPDATE intan9nov SET nama_ruang= '$nama_ruang',jenis_ruang='$jenis_ruang',kondisi='$kondisi' WHERE id=$kode";
    $query= mysqli_query($koneksi,$sql);

    if($query){
        header('location: tampil.php');
    }else{
        die ("gagal mengedit");
    }}
    else{
        die("akses dilarang");
    }
    ?>
