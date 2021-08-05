<?php
        include_once("database/connection.php");?>
<!DOCTYPE html>
<html lang="en">

        <?php
         require('header/head.php');
        ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
         require('sidebar.php');
         require('topbar.php');
        ?>

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th>Nama Barang</th>
                                
                                <th>Kategori</th>
                                <th>Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                            $no = 1;
                            $data_barang = mysqli_query($connect, "SELECT * FROM barang JOIN kategori 
                            ON barang.id_kategori=kategori.id_kategori
                            JOIN satuan ON barang.id_satuan=satuan.id_satuan");
                            
                            while ($d = mysqli_fetch_array($data_barang)) {
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $d['nama_barang']; ?></td>
                            <td><?php echo $d['nama_kategori']; ?></td>
                            <td><?php echo $d['nama_satuan']; ?></td>
                            <td><a href="http://localhost:8080/10117130-KSI-3/action_hapus_data_barang.php?id=<?= $d['id_barang'] ?>"><button class="btn btn-danger">Hapus</button></a></td>
                            </tr>
                        </tbody>
                        <?php }; ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

             <!-- Footer -->
             <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Minimarket Mantap Mantap 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="action_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php
        require ('footer/footer_script.php'); 
    ?>

</body>

</html>