<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<style>
      body{
        background-image: url("https://lh3.googleusercontent.com/-gKp7i66veso/WQjZZfGmiFI/AAAAAAAADto/UsCmjfss6X0_x14lEBeSbCrC1KEpTR0RwCHM/s1600/wallpaper%252Bputih%252B%2Ball-white-wallpaper-0.jpg");
        background-repeat:no-repeat;
        background-size:cover;
      }
    </style>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
    <h1 class= "text-center">Data Kelas</h1>
        <table class="table table-light table-striped">
    <thead>
        <tr>
            <th scope="col">ID Kelas</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Angkatan</th>
        </tr>
  </thead>
  <tbody>
      <?php
      include "koneksi.php";
      if (isset($_POST["cari"])) {
          //jika ada keyword pencarian
          $cari = $_POST['cari'];
          $qry_kelas = mysqli_query($koneksi, "select * from kelas where id_kelas='$cari' or nama_kelas like'%$cari%'");
      } else {
          //jika tidak ada keyword pencarian
          $qry_kelas=mysqli_query($koneksi,"select * from kelas");
      }

      while($data_kelas=mysqli_fetch_array($qry_kelas)){
      ?>
        <tr>
            <td><?php echo $data_kelas["id_kelas"]; ?></td>
            <td><?php echo $data_kelas["nama_kelas"]; ?></td>
            <td><?php echo $data_kelas["jurusan"]; ?></td>
            <td><?php echo $data_kelas["angkatan"]; ?></td>
    <?php
    }
    ?>
  </tbody>
  </table>
        <td><a href="tambah_kelas.php" class="btn btn-success">Tambah Kelas</a>
        </tr>
    <?php
    ?>
  </tbody>
  </table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>