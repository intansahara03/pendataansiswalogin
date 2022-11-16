<html>
    <head>
</head>
<body>    
    <h1>APLIKASI PENDATAAN RUANG SMKN 1 SAYUNG</h1>
    <form action ="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <h4><a href="logout.php">LOGOUT</a></h4>
                <p>
                    <label for ="nama_ruang">nama ruang:</label>
                    <input type="text" name="nama_ruang"/>
                </p>
                <p>
                    <label for ="jenis_ruang">jenis ruang:</label>
                    <select name="jenis_ruang">
                        <option value="laboratorium">laboratorium</option>
                        <option value="kantin">kantin</option> 
                        <option value="ruang_kelas">ruang_kelas</option>
                        <option value="mushola">mushola</option>
                        <option value="aula">aula</option>
</select>
</p>
<p>
    <label for = "kondisi">kondisi: </label>
    <input type= "text" name="kondisi"/>
</p>
<p>
    <input type="submit" value = "kirim" name="kirim"/>
</p>
</body>
</html>