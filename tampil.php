<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../login.php?pesan=belum_login");
    }
    ?>
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>! ANDA BERHASIL LOGIN-!!</h1>
    <br/>
    <br/>
    <h1>APLIKASI PENDATAAN RUANG SMKN 1 SAYUNG</h1>
    <h4> <a href="logout.php">LOGOUT</a><h4>
        <table border="1">
            <tr>
                <th>id</th>
                <th>nama_ruang</th>
                <th>jenis_ruang</th>
                <th>kondisi</th>
                <th>aksi</th>
</tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM intan9nov';
$query = mysqli_query($koneksi, $sql);
while($intan9nov = mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$intan9nov['id']."</td>";
    echo"<td>".$intan9nov['nama_ruang']."</td>";
    echo"<td>".$intan9nov['jenis_ruang']."</td>";
    echo"<td>".$intan9nov['kondisi']."</td>";
    echo"<td>";
    echo"<a href='edit.php?id=".$intan9nov['id']."'>Edit</a> |";
    echo"<a href='hapus.php?id=".$intan9nov['id']."'>Hapus</a> |";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
<h4><a href="tambah.php"><input type="submit" name="tambah" value="tambah"/></h4></a>
</body>
</html>