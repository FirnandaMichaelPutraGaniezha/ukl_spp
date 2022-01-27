<?php
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST["nama_kelas"];
    $jurusan = $_POST["jurusan"];
    $angkatan = $_POST["angkatan"];
    include "koneksi.php";
    $input = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas ='".$nama_kelas."', 
    jurusan = '".$jurusan."' , angkatan = '".$angkatan."' 
    where id_kelas = '".$id_kelas."'");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='datakls.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='ubahkls.php';</script>";
    }
?>