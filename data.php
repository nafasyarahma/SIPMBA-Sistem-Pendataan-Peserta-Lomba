<!doctype html>
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

  <body>
    <div class="container-fluid">
        <h1 align="center" class="mt-4">DATA PESERTA LOMBA</h1><br><br>
        
        <div class="card mb-4">
            <div class="card-header">
                <a href="tambah_data.php" class="btn btn-primary">
                <i class="fa fa-edit"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Asal Instansi</th>
                                <th>Cabang Lomba</th>
                                <th>Nomor HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <?php
                            $no = 1;
                            include ('koneksi.php');
                            $hasil = mysqli_query($koneksi,"select * from peserta");
                            while($data=mysqli_fetch_array($hasil)){
                                $nama=$data['nama'];
                                $asal_instansi=$data['asal_instansi'];
                                $cabang_lomba=$data['cabang_lomba'];
                                $no_hp=$data['no_hp'];
                            ?>

                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?=$nama;?></td>
                                <td><?=$asal_instansi;?></td>
                                <td><?=$cabang_lomba;?></td>
                                <td><?=$no_hp;?></td>
                                <td>
                                    <a href="edit_data.php?id=<?php echo $data['id']; ?>" title="Edit" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="hapus_data.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
                                    title="Hapus" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }; 
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>