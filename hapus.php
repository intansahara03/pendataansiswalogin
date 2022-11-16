<?php
include("koneksi.php");
isset($_GET['simpan']);
$kode = $_GET['id'];
$sql= "DELETE FROM intan9nov where id=$kode";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}
?>
