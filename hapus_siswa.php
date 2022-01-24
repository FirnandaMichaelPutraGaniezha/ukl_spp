<?php
    if($_GET['nisn']){
        include "koneksi.php";
        $query_hapus=mysqli_query($koneksi,"DELETE FROM siswa where nisn='".$_GET['nisn']."'");
    if($query_hapus){
        echo "<script>alert('Sukses Hapus Siswa');location.href='tampil_siswa.php';</script>";
    } else {
        echo "<script>alert('Gagal Hapus Siswa');location.href='tampil_siswa.php';</script>";
        }
    } 
?>