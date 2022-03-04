<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div style="background-image: url('/PHP/spp/foto/pipes.png'); height:1000px">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">    <title>Document</title>
    <link href="tampil_kelas.css" rel="stylesheet">
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
        include "koneksi.php";
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
    <h1 class= "text-center">History</h1>
        <table class="table table-light table-striped">
        </form>
            <table class="table table-light table-striped"> 
        <thead>
        <tr>
            <th scope="col">id petugas</th>
            <th scope="col">Nisn</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Bayar</th>
            <th scope="col">Spp Bulan</th>
            <th scope="col">Spp Tahun</th>
            <th scope="col" style="text-align:center">aksi</th>
        </tr>
        </thead>
    <tbody>
        <?php
        include "koneksi.php";
        if (isset($_POST["cari"])){
            $cari =  $_POST['cari'];
            $query_bayar = mysqli_query($koneksi,
            "SELECT * FROM pembayaran where bulan_spp = ' $cari ' or nisn like '$cari%' ORDER BY bulan_spp DESC");
        }else {
            //jika tidak ada keyword pencarian 
            $query_bayar = mysqli_query($koneksi,"select * from pembayaran ORDER BY bulan_spp DESC");
        }
        while ($data_bayar=mysqli_fetch_array($query_bayar)) { ?>
        <?php
        $query_siswa = mysqli_query($koneksi, "select * from siswa where nisn = '".$data_bayar['nisn']."'");
        $data_siswa = mysqli_fetch_array($query_siswa);
        ?>
              <tr>
              <input type="hidden" value="<?php echo $data_bayar['id_pembayaran']?>">
                  <td><?php echo $data_bayar["id_petugas"]; ?></td>
                  <td><?php echo $data_bayar["nisn"]; ?></td>
                  <td><?php echo $data_siswa["nama"]?></td>
                  <td><?php echo $data_bayar["tgl_bayar"]; ?></td>
                  <td><?php echo $data_bayar["bulan_spp"];?></td>
                  <td><?php echo $data_bayar["tahun_spp"];?></td>
                  <td>
                      <a href="hapus_pembayaran.php?id_pembayaran=<?=$data_bayar['id_pembayaran']?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini?')">Delete</a>
                  </td> 
              </tr>
            <?php
            }
            ?>
        </tbody>
        <!-- S -->
        <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        </div>  
    </div>
</body>
</html>