<?php
include("koneksi.php");
if(isset($_POST['kirim'])){
    $nama_ruang=$_POST['nama_ruang'];
    $jenis_ruang=$_POST['jenis_ruang'];
    $kondisi=$_POST['kondisi'];

    $sql = "INSERT INTO intan9nov(nama_ruang, jenis_ruang, kondisi) VALUES ('$nama_ruang', '$jenis_ruang', '$kondisi')";
    $query= mysqli_query($koneksi, $sql); 
}else{
    ('akses dilarang');
}
?>