<?php
include "koneksi.php";
if($_POST){
    $nisn = $_POST['nisn'];
    $id_petugas = $_POST['id_petugas'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $bulan_spp = $_POST['bulan_spp'];
    $tahun_spp = $_POST['tahun_spp'];
    $id_spp = $_POST['id_spp'];
    
        $cek = mysqli_query($koneksi,"SELECT * from pembayaran where nisn ='".$nisn."' and bulan_spp = '".$bulan_spp."'");
        // $input= mysqli_query($koneksi, "INSERT INTO pembayaran (id_petugas, nisn, tgl_bayar, bulan_spp, tahun_spp, id_spp)
        // value ('".$id_petugas."', '".$nisn."', '".$tgl_bayar."', '".$bulan_spp."', '".$tahun_spp."', '".$id_spp."')");
        if(mysqli_num_rows($cek) > 0  ){
            echo "<script>alert('sudah ada'); location.href='history_pembayaran.php';</script>";
        } elseif(mysqli_num_rows($cek) < 1){
            echo "<script>alert('pembayaran Berhasil'); location.href='history_pembayaran.php';</script>";
            echo $input= mysqli_query($koneksi, "INSERT INTO pembayaran (id_petugas, nisn, tgl_bayar, bulan_spp, tahun_spp, id_spp)
            value ('".$id_petugas."', '".$nisn."', '".$tgl_bayar."', '".$bulan_spp."', '".$tahun_spp."', '".$id_spp."')");
        } 
    }
    ?>