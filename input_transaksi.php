<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Akhir KSI 3</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

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
                        <h1 class="h3 mb-0 text-gray-800">Input Data Barang</h1>
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
                <form action="action_data_transaksi.php" method="POST" id="form_transaksi" class="form_data_pelanggan">

                <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <select class="form-control" name="nm" id="nm">
                        <option disabled selected> Cari Pelanggan </option>
                        <?php
                        $namakategori = mysqli_query($connect, "SELECT * from pelanggan");
                        while ($data=mysqli_fetch_array($namakategori)) {
                            
                            ?>
                        <option value="<?=$data['id_pelanggan']?>"><?=$data['nama_pelanggan']?></option>
                        <?php
                        }
                        ?>
                        </select>
                </div>

                  <div class="form-group">
                        <label for="brg">Barang</label>
                        <select class="form-control" name="brg" id="brg">
                        <option disabled selected> Cari Barang </option>
                        <?php
                        $namakategori = mysqli_query($connect, "SELECT * from Barang");
                        while ($data=mysqli_fetch_array($namakategori)) {
                            
                            ?>
                        <option value="<?=$data['id_barang']?>"><?=$data['nama_barang']?></option>
                        <?php
                        }
                        ?>
                        </select>
                </div>

                <div class="form-group">
                        <label for="nama_transaksi">Nama Transaksi</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Contoh : Penjualan  " required>
                </div>

                <div class="form-group">
                        <label for="tgltransaksi">Tanggal Transaksi</label>
                        <input type="date" name="tgltransaksi" class="form-control" id="tgltransaksi" placeholder="Contoh : yyyy-mm-dd " required>
                
                </div>

                <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" placeholder="Contoh : 25000 (Tanpa Titik) " required>
                </div>

                <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="text" name="qty" class="form-control" id="qty" placeholder="Contoh : 1, 2, 3 dst " required>
                </div>
                
                <div class="form-group">
                        <label for="disc">Diskon</label>
                        <input type="text" name="disc" class="form-control" id="disc" placeholder="Contoh : 10,20,30 dst " required>
                </div>

                    <div class="footer">
                    <a href="tampil_transaksi.php" class="btn btn-primary float-right" >view data Transaksi</a>
                    <button type="submit" form="form_transaksi" value="Submit" class="btn btn-primary float-right" style="margin-right:10px">Submit</button>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>