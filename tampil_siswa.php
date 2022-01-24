<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
    <h1 class= "text-center">Data Siswa</h1>
        <table class="table table-light table-striped">
    <form action="tampil_siswa.php" method="POST">
            <input type="text" name="cari" class="form-control" placeholder="Masukkan Keyword Pencarian">
        </form>
        </form>
            <table class="table table-light table-striped"> 
        <thead>
            </div>
                <thead>
                    <tr>
                    <th scope="col">NISN</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">No.Telp</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_siswa = mysqli_query($koneksi, "select * from siswa s join kelas k on s.id_kelas = k.id_kelas where s.nisn like '%$cari%' or s.nis like '%$cari$' or s.nama like '%$cari%' or s.alamat like '%$cari%'");
                    }
                    else{
                        $query_siswa = mysqli_query($koneksi, "select * from siswa s join kelas k on s.id_kelas = k.id_kelas");
                    }
                    while($data_siswa = mysqli_fetch_array($query_siswa)){
                ?>
                    <tr>
                        <tr>
                        <td><?=$data_siswa['nisn']?></td>
                        <td><?=$data_siswa['nis']?></td>
                        <td><?=$data_siswa['nama']?></td>
                        <td><?=$data_siswa['nama_kelas']?></td>
                        <td><?=$data_siswa['alamat']?></td>
                        <td><?=$data_siswa['no_telp']?></td>
                        <td>
                        <a href="tampil_bayar.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-success">Bayar</a>
                        <a href="hapus_siswa.php?nisn=<?=$data_siswa['nisn']?>"
                        onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>
                        </tr>
                        </td>
                    </tr>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            <td><a href="tambah_siswa.php" class="btn btn-success">Tambah Siswa</a>
            </tr>
            </div>
        </div>
    </div>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>