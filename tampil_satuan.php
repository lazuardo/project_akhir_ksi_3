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
        <h1 class="h3 mb-2 text-gray-800">Data Satuan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th>ID Satuan</th>
                                <th>Satuan</th>
                            </tr>
                        </thead>
                        <?php
                            $no = 1;
                            $data_kategori = mysqli_query($connect, "SELECT * FROM satuan");
                            while ($d = mysqli_fetch_assoc($data_kategori)) {
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $d['id_satuan']; ?></td>
                            <td><?php echo $d['nama_satuan']; ?></td>
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