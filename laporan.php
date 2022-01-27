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
<main>
        <div id="main">
        <?php include 'navbar.php'; ?>
		<style >
      body{
        background-image: url("https://lh3.googleusercontent.com/-gKp7i66veso/WQjZZfGmiFI/AAAAAAAADto/UsCmjfss6X0_x14lEBeSbCrC1KEpTR0RwCHM/s1600/wallpaper%252Bputih%252B%2Ball-white-wallpaper-0.jpg");
        background-repeat:no-repeat;
        background-size:cover;
      }
	.btn{
		margin-top: 10px;
	}
	.panel-heading{
		margin-top: 80px;
	}
</style>
<div class="panel panel-info col-md-12">
	<div class="panel-heading">
<h3>Laporan Data</h3>
</div>                     
<div class="panel-body">
	<table class="table table-bordered table-striped">
		<tr>
			<th >Nama Laporan</th>
			<th width="200">Cetak</th>
		</tr>
		
		<form class="col-md-2" action="laporan_pembayaran.php" method="GET" target="_blank" >
			<td>
			<b>Laporan Pembayaran</b>
		</td>
		<td>
			Mulai Tanggal <input class="form-control" type="date" name="tgl1" value="<?= date('Y-m-d') ?>">
			Sampai Tanggal <input class="form-control" type="date" name="tgl2" value="<?= date('Y-m-d') ?>">
			<button class="btn btn-danger btn-lg" type="submit" name="tampil">Tampilkan</button>
		</td>
		</form>
	</tr>
</table>
</div>
</div>

        </div>
    </main>


  
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>