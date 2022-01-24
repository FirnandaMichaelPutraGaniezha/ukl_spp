<?php
if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama= $_POST['nama'];
    $id_kelas= $_POST['id_kelas'];
    $alamat= $_POST['alamat'];
    $no_telp= $_POST['no_telp'];
    if(empty($nisn)){
        echo "<script>alert('nisn tidak boleh kosong');location.href='tambah_siswa.php';</script>";
 
    } elseif(empty($nis)){
        echo "<script>alert('nis tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($id_kelas)){
        echo "<script>alert('id kelas tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($no_telp)){
        echo "<script>alert('no telp tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into siswa (nisn, nis, nama, id_kelas, alamat, no_telp ) 
        VALUES ('".$nisn."','".$nis."','".$nama."','".$id_kelas."','".$alamat."','".$no_telp."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses menambahkan Siswa');location.href='home.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>