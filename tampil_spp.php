<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data SPP</title>
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
    <div class="container">
    <h1 class= "text-center">Data SPP</h1>
        <table class="table table-light table-striped">
    <thead>
        <tr>
            <th scope="col">ID SPP</th>
            <th scope="col">Angkatan</th>
            <th scope="col">Tahun</th>
            <th scope="col">nominal</th>
        </tr>
  </thead>
  <tbody>
      <?php
      include "koneksi.php";
      if (isset($_POST["cari"])) {
          //jika ada keyword pencarian
          $cari = $_POST['cari'];
          $qry_spp = mysqli_query($koneksi, "select * from spp where id_spp='$cari' or angkatan like'%$cari%' or tahun like'%$cari%'or nominal like'%$cari%'");
      } else {
          //jika tidak ada keyword pencarian
          $qry_spp=mysqli_query($koneksi,"select * from spp");
      }

      while($data_spp=mysqli_fetch_array($qry_spp)){
      ?>
        <tr>
            <td><?php echo $data_spp["id_spp"]; ?></td>
            <td><?php echo $data_spp["angkatan"]; ?></td>
            <td><?php echo $data_spp["tahun"]; ?></td>
            <td><?php echo $data_spp["nominal"]; ?></td>
        </tr>
    <?php
    }
    ?>
  </tbody>
  </table>
  </tbody>
  </table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>