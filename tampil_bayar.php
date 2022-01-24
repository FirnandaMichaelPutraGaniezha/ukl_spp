<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pembayaran</title>
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
        include "koneksi.php";
        $query_bayar = mysqli_query($koneksi, "SELECT * from siswa join petugas join spp where nisn ='".$_GET['nisn']."'");
        $data_bayar = mysqli_fetch_array($query_bayar);
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Bayar SPP</h1>
            <div class="card-body">
                <form method="POST" action="proses_bayar.php">
                    <input type="hidden" name="nisn" value="<?=$data_bayar['nisn']?>">
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" name="nisn" value="<?=$data_bayar['nisn']?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="id_petugas" class="form-label">Id Petugas</label>
                        <input type="text" class="form-control" name="id_petugas" value="<?=$data_bayar['id_petugas']?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_bayar" class="form-label">Tanggal Bayar</label>
                        <input type="date" class="form-control" name="tgl_bayar" required>
                    </div>
                    <div class="mb-3">
                        <label for="bulan_spp" class="form-label">Bulan Bayar</label>
                        <select name="bulan_spp"class=form-select required>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>   
                            <option value="4">April</option>  
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>                       
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_spp" class="form-label">Tahun Bayar</label>
                        <input type="number" class="form-control" name="tahun_spp" maxlength="4" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_spp" class="form-label">Angkatan</label>
                        <select name="id_spp" class="form-select" required>
                            <option></option>
                            <?php
                                include "koneksi.php";
                                $query_spp = mysqli_query($koneksi, "select DISTINCT * from spp order by angkatan asc");
                                while($data_spp = mysqli_fetch_array($query_spp)){
                                    echo '<option value="'.$data_spp['id_spp'].'" >'.$data_spp['angkatan'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>