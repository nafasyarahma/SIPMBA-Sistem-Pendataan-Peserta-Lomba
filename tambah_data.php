<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <title>UAP Web Programming</title>
    </head>
    

    <body >
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">
                Tambah Data Peserta</h3>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Asal Instansi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="asal_instansi" name="asal_instansi" placeholder="Masukkan asal instansi" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Cabang Lomba</label>
                        <div class="col-sm-3">
                            <select name="cabang_lomba" id="cabang_lomba" class="form-control">
                                <option>- Pilih cabang lomba -</option>
                                <option>Pemrograman</option>
                                <option>Desain Grafis</option>
                                <option>Animasi</option>
                                <option>Karya Tulis Ilmiah</option>
                                <option>Video Editing</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP" required>
                        </div>
                    </div>

                    <div class="card-footer">
                        <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
                        <a href="data.php" title="Kembali" class="btn btn-secondary">Batal</a>
		            </div>
            </form>
        </div>
    <body >

    
<?php
//Membuat koneksi ke database
include ('koneksi.php');

//Menambah data 
if(isset($_POST['Simpan'])){
    $nama=$_POST['nama'];
    $asal_instansi=$_POST['asal_instansi'];
    $cabang_lomba=$_POST['cabang_lomba'];
    $no_hp=$_POST['no_hp'];

    $tambah=mysqli_query($koneksi, "insert into peserta values('','$nama','$asal_instansi','$cabang_lomba','$no_hp')");

    if($tambah){
        header('location:data.php');
    }else{
        header('location:gagal.php');
    }
}
?>
