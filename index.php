<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>

<?php
    

    include "function.php";
    
    $koneksi = new mysqli("localhost", "root", "", "db_perpustakaan");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Perpustakaan : SD Negeri Jatinegara 6</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>
<body >
    <div style="background-color: blue">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation"  style="background-color: #00fff9">
            <div class="navbar-header" style="background-color: blue">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="background-color: #00fff9" ><span style="color: red">Perpustakaan</span></a> 
            </div>
  <div style="color: black;>
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 20 Februari 2021  <a href="#" class="btn btn-success square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="background-color: blue">
            <div class="sidebar-collapse" style="background-color: blue">
                <ul class="nav" id="main-menu" style="background-color: blue">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
				</li>
				
					
                    <li>
                        <a  href="index.php" style="background-color: blue"><i class="fa fa-dashboard fa-3x"></i><span style="color: white">Home</span></a>
                    </li>

                    <li>
                        <a  href="?page=anggota" style="background-color: blue"><i class="fa fa-desktop fa-3x"></i><span style="color: white"> Anggota </span></a>
                    </li>
                    
                    <li>
                        <a  href="?page=buku" style="background-color: blue"><i class="fa fa-table fa-3x"></i><span style="color: white"> Buku </span></a>
                    </li>

                    <li>
                        <a  href="?page=transaksi" style="background-color: blue"><i class="fa fa-edit fa-3x"></i><span style="color: white"> Transaksi </span></a>
                    </li>                    
                    	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="background-color: blue">
            <div id="page-inner" style="background-color: #00fff9">
                <div class="row">
                    <div class="col-md-12" >
                       <?php
                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];

                            if ($page == "buku") {
                                if ($aksi == "") {
                                    include "page/buku/buku.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/buku/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/buku/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/buku/hapus.php";
                                }
                            }elseif ($page == "anggota") {
                                if ($aksi == "") {
                                    include "page/anggota/anggota.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/anggota/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/anggota/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/anggota/hapus.php";
                                }
                            }elseif ($page == "transaksi") {
                                if ($aksi == "") {
                                    include "page/transaksi/transaksi.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/transaksi/tambah.php";
                                }elseif ($aksi == "kembali") {
                                    include "page/transaksi/kembali.php";
                                }elseif ($aksi == "perpanjang") {
                                    include "page/transaksi/perpanjang.php";
                                }
                            }
                       ?>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

   
</body>
</html>
