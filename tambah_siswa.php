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
        <h3 class= "text-center">Tambah Siswa</h3>
        <form action="proses_tambah_siswa.php" method="post">
        <?php
        include "koneksi.php";
            $qry_siswa=mysqli_query($koneksi,"select * from siswa");
            while($data_siswa=mysqli_fetch_array($qry_siswa)){
        }
        ?>
        </select></br>
            nisn : 
            <br><input type="text" name="nisn" value="" class="form-control"></br>
            nis : 
            <br><input type="text" name="nis" value="" class="form-control"></br>
            nama : 
            <br><input type="text" name="nama" value="" class="form-control"></br>
            <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select name="id_kelas" class="form-select" required>
                            <option></option>
                            <?php
                                include "koneksi.php";
                                $query_kelas = mysqli_query($koneksi, "select * from kelas");
                                while($data_kelas = mysqli_fetch_array($query_kelas)){
                                    if($data_kelas['id_kelas']==$data_siswa['id_kelas']){
                                        $selek="selected";
                                    } else {
                                        $selek="";
                                    }
                                    echo '<option value="'.$data_kelas['id_kelas'].'" '.$selek.' >'.$data_kelas['nama_kelas'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
            alamat : 
            <br><input type="text" name="alamat" value="" class="form-control"></br>
            no telp : 
            <br><input type="text" name="no_telp" value="" class="form-control"></br>
            <br><input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary"></br>
        </form>
    </div>
<script src=
        <!-- JavaScript Bundle with Popper -->
        "<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>