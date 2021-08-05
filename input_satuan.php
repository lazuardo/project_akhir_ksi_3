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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Input Data Satuan</h1>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <?php
   
    include_once("database/connection.php");
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                <form action="action_data_satuan.php" method="POST" id="form_satuan" class="form_data_satuan">

                    <div class="form-group">
                        <label for="nama_satuan">Nama Satuan</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Contoh : Pcs, Kilogram  " required>
                        </div>
                        <div class="footer">
                        <a href="tampil_satuan.php" class="btn btn-primary float-right" >view data Satuan</a>
                        <button type="submit" form="form_satuan" value="Submit" class="btn btn-primary float-right" style="margin-right:10px">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    


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