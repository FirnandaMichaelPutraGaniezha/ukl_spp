<!DOCTYPE html>
<html lang="en">
<head>
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
        include "navbar1.php";
    ?>
    <div class="container">
        <h3 class= "text-center">Tambah Petugas</h3>
        <form action="proses_tambah_petugas.php" method="post">
            nama petugas :
            <input type="text" name="nama_petugas" value="" class="form-control">
                <option></option>
        <?php
        include "koneksi.php";
            $qry_petugas=mysqli_query($koneksi,"select * from petugas");
            while($data_petugas=mysqli_fetch_array($qry_petugas)){
        }
        ?>
        </select></br>
            username : 
            <br><input type="text" name="username" value="" class="form-control"></br>
            password : 
            <br><input type="password" name="password" value="" class="form-control"></br>
            <br><input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary"></br>
        </form>
    </div>
<script src=
        <!-- JavaScript Bundle with Popper -->
        "<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>