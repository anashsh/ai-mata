<?php

    include 'koneksi.php';
    $query  = mysqli_query($koneksi,"SELECT * FROM gejala")

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Naive Bayes - Penyakit Mata</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap4/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap3/bootstrap.min.css" rel="stylesheet">

  <style>
    .header {
      overflow: hidden;
      background-color: #343a40;
      padding: 10px 10px;
      text-align: center;
    }

    .header a {
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      color: white; 
      line-height: 25px;
      border-radius: 4px;
    }

    @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: center;
    }
    }
  </style>
</head>

<body>

  <!-- Header -->
  <div class="header">
    <div class="container">
      <a href="index.php">(o_o) Identifikasi Penyakit Mata dengan Algoritma Naive Bayes (o_o)</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h3 class="my-4"></h3>
        <div class="list-group">
          <a href="index.php" class="list-group-item active">Konsultasi</a>
          <a href="penyakit.php" class="list-group-item">Data Penyakit</a>
          <a href="gejala.php" class="list-group-item">Data Gejala</a>
          <a href="dataset.php" class="list-group-item">Dataset</a>
          <a href="about.php" class="list-group-item">Tentang Kami</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="card mt-4">
          <form method="post" action="proses_analisis.php">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <center><h2>Pilih Gejala - Gejala yang Dialami</h2></center>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">Kode Gejala
                            </th>
                            <th class="th-sm">Pilih
                            </th>
                            <th class="th-sm">Nama Gejala
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                  <?php
                      $a=0;
                      while($db_row = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                        <td>
                            <?php echo $db_row["Kode_Gejala"]; ?>
                        </td>
                        <td>
                            <input type="checkbox" name="gejala[]" value="<?php echo $db_row["Kode_Gejala"]; ?>">
                        </td>
                        <td>
                            <?php echo $db_row["Nama_Gejala"]; ?>
                        </td>
                    </tr>
                  <?php
                      $a++;
                  }
                  ?>
                    </tbody>
                </table>
                <input type="submit" class="btn btn-success" name="submit" value="Analisis">
              </div>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; AI 2019</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</html>
