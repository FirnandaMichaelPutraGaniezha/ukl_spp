<?php
    if($_GET['id_pembayaran']){
        include "koneksi.php";
        $query_hapus=mysqli_query($koneksi,"DELETE FROM pembayaran where id_pembayaran='".$_GET['id_pembayaran']."'");
    if($query_hapus){
        echo "<script>alert('Sukses Hapus history');location.href='history_pembayaran.php';</script>";
    } else {
        echo "<script>alert('Gagal Hapus history');location.href='history_pembayaran.php';</script>";
        }
    } 
?>