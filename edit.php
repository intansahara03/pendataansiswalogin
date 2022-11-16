<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM intan9nov WHERE id=$kode";
$query = mysqli_query($koneksi, $sql);
$intan9nov = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1> From edit </h1>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $intan9nov['id']?>" />
            <p>
                <label for="nama_ruang">nama ruang : </label>
                <input type="text" name="nama_ruang" value="<?php echo $intan9nov['nama_ruang']?>" />
            </p>
            <p>
                <label for ="jenis_ruang">jenis ruang : </label>
                <select name="jenis_ruang" value="<?php echo $intan9nov['jenis_ruang']?>" >
                <option value="laboratorium"> laboratorium :</option>
                <option value="kantin"> kantin :</option>
                <option value="ruang_kelas"> ruang_kelas :</option>
                <option value="mushola"> mushola :</option>
                <option value="aula"> aula :</option>
</select>
</p>
            <p>
            <label for="kondisi">kondisi: </label>
            <input type="text" name="kondisi" value="<?php echo $intan9nov['kondisi']?>" />
            </p> 
<p>
    <input type="submit" name="edit" value="edit">
</p>
</fieldset>
</body>
</html>