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
        <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pelanggan</th>
                                <th>Kategori Barang</th>
                                <th>Barang</th>
                                <th>qty</th>
                                <th>harga</th>
                                <th>Diskon</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <?php
                            $no = 1;
                            $data_transaksi = mysqli_query($connect, "SELECT pelanggan.*, barang.*,transaksi.*,kategori.*
                            FROM transaksi 
                            JOIN pelanggan 
                            ON (transaksi.id_pelanggan = pelanggan.id_pelanggan) 
                            JOIN barang 
                            ON (transaksi.id_barang = barang.id_barang)
                            JOIN kategori
                            ON (barang.id_kategori=kategori.id_kategori)");
                            while ($d = mysqli_fetch_assoc($data_transaksi)) {
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $d['nama_pelanggan']; ?></td>
                            <td><?php echo $d['nama_kategori'];?></td>
                            <td><?php echo $d['nama_barang']; ?></td>
                            <td><?php echo $d['qty']; ?></td>
                            <td><?php echo $d['harga']; ?></td>
                            <td><?php echo $d['diskon']; echo '%' ?></td>
                            <td>
                            <?php 
                                 $harga = $d['harga'];
                                 $diskon =$d['diskon'];
                                 $qty = $d['qty'] ;
                                 $harga_baru = $harga * $qty; 
                                 $nilai=(($diskon/100)*$harga_baru);
                                 $total = $harga_baru - $nilai;
                                 echo $total;
                            
                            ?></td>
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