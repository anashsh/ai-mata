<?php

    include 'koneksi.php';
    $query  = mysqli_query($koneksi,"SELECT * FROM gejala")

?>
<html>
<head>
<title>Sistem Pakar Penyakit Mata</title>
</head>

<body>
<form method="post" action="bayes.php">
    <h2>Pilih Gejala - Gejala yang Dialami</h2>
    <?php
        $a=0;
        while($db_row = mysqli_fetch_array($query)) {
    ?>
        <input type="checkbox" name="gejala" value="<?php echo $db_row["Kode_Gejala"]; ?>"><?php echo $db_row["Nama_Gejala"]; ?><br>
    <?php
        $a++;
    }
    ?>
<input type="submit">
</form>
</body>
</html>