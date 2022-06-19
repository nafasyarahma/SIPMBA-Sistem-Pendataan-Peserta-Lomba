<?php
$id = $_GET['id'];
    include ('koneksi.php');
    $hasil = mysqli_query($koneksi,"select * from peserta where id=$id");
    while($data=mysqli_fetch_array($hasil)){
        $nama=$data['nama'];
        $asal_instansi=$data['asal_instansi'];
        $cabang_lomba=$data['cabang_lomba'];
        $no_hp=$data['no_hp'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
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
                Edit Data Peserta</h3>
            </div>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?=$nama;?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Asal Instansi</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="asal_instansi" name="asal_instansi" value="<?=$asal_instansi;?>" placeholder="Masukkan asal instansi" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Cabang Lomba</label>
                        <div class="col-sm-3">
                            <select name="cabang_lomba" id="cabang_lomba"  class="form-control">
                                <option selected="selected"><?=$cabang_lomba;?></option>
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
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$no_hp;?>" placeholder="Masukkan nomor HP" required>
                        </div>
                    </div>

                    <div class="card-footer">
                        <input type="submit" name="Edit" value="Edit" class="btn btn-info">
                        <a href="data.php" title="Kembali" class="btn btn-secondary">Batal</a>
                    </div>
            </form>
        </div>
    <body >

<?php
    };
?>

<?php
//Membuat koneksi ke database
include ('koneksi.php');

//Mengupdate data 
if(isset($_POST['Edit'])){
    $nama=$_POST['nama'];
    $asal_instansi=$_POST['asal_instansi'];
    $cabang_lomba=$_POST['cabang_lomba'];
    $no_hp=$_POST['no_hp'];
    
    $update = mysqli_query($koneksi,"update peserta set nama='$nama', asal_instansi='$asal_instansi', cabang_lomba='$cabang_lomba', no_hp='$no_hp' where id='$id'");
    if($update){
        header('location:data.php');
    }else{
        echo 'gagal';
        header('location:gagal.php');
    }
}
?>
<?php