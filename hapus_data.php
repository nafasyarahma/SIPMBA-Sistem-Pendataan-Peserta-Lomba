<?php
//Membuat koneksi ke database
include ('koneksi.php');

//Menghapus Data
$id = $_GET['id'];
if(isset($_GET['id'])){
    $hapus = mysqli_query($koneksi, "delete from peserta where id='$id'");

    if($hapus){
        header('location:index.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }
}
?>
