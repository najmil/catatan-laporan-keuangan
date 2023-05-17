<?php
require 'cek-sesi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php 
require 'koneksi.php';
require ('sidebar.php');
?>   
     <!-- Main Content -->
      <div id="content">

<?php require ('navbar.php');?>  
        <div class="container-fluid">
          <div class="row">
			  </div>
			  <div>
          <button type="button" class="btn btn-danger" style="margin:5px" data-toggle="modal" 
          data-target="#myModalTambah"><i class="fa fa-plus">&nbsp;&nbsp Pengeluaran </i></button><br>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Transaksi Masuk</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $query = mysqli_query($koneksi,"SELECT * FROM pengeluaran");
                      $no = 1;
                      while ($data = mysqli_fetch_assoc($query)) {
                      ?>
                      <tr>
                        <td><?=$data['tgl_pengeluaran']?></td>
                        <td>Rp. <?=number_format($data['jumlah'],2,',','.');?></td>
                        <td><?=$data['ket']?></td>
                        <td><a href="#" type="button" class=" fa fa-edit btn btn-primary btn-md"
                        data-toggle="modal" data-target="#myModal<?php echo $data['id_pengeluaran']; ?>"></a>
                      </td>
                    </tr>
                    <div class="modal fade" id="myModal<?php echo $data['id_pengeluaran']; ?>" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Ubah Data pengeluaran</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form role="form" action="proses-edit-pengeluaran.php" method="get">
                            <?php
                            $id = $data['id_pengeluaran']; 
                            $query_edit = mysqli_query($koneksi,"SELECT * FROM pengeluaran WHERE id_pengeluaran='$id'");
                            while ($row = mysqli_fetch_array($query_edit)) {  
                            ?>
                            <input type="hidden" name="id_pengeluaran" value="<?php echo $row['id_pengeluaran']; ?>">
                            <div class="form-group">
                              <label>Id</label>
                              <input type="text" name="id_pengeluaran" class="form-control" value="<?php echo $row['id_pengeluaran']; ?>" disabled>      
                            </div>

                            <div class="form-group">
                              <label>Tanggal</label>
                              <input type="date" name="tgl_pengeluaran" class="form-control" value="<?php echo $row['tgl_pengeluaran']; ?>">      
                            </div>

                            <div class="form-group">
                              <label>Jumlah</label>
                              <input type="text" name="jumlah" class="form-control" value="<?php echo $row['jumlah']; ?>">      
                            </div>

                            <div class="form-group">
                              <label>Keterangan</label>
                              <input type="text" name="ket" class="form-control" value="<?php echo $row['ket']; ?>">      
                            </div>
                            <div class="modal-footer">  
                              <button type="submit" class="btn btn-warning">Ubah</button>
                              <a href="hapus-pengeluaran.php?id_pengeluaran=<?=$row['id_pengeluaran'];?>" Onclick="confirm('Yakin Untuk Dihapus?')" class="btn btn-danger">Hapus</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                            </div>
                            <?php } ?>  
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
                
                <div id="myModalTambah" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah pengeluaran</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <form action="tambah-pendapatan.php" method="get">
                        <div class="modal-body">
                          Tanggal : <input type="date" class="form-control" name="tgl_pengeluaran">
                          Jumlah : <input type="number" class="form-control" name="jumlah">
                          Keterangan : <input type="text" class="form-control" name="ket">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-default" >Tambah</button>
                      </form>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php }  ?>
              </tbody>
              </table>
              </div>
            </div>
          </div>
		  	</div>
      </div>
    </div>

  <!-- tombol scroll ke atas -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout -->
  <?php require 'logout-modal.php';?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>
</html>