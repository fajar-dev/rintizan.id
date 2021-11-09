<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Product</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url();?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-chart-line "></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rintizan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Product</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" style="">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">action :</h6>
                        <a class="collapse-item" href="<?php echo site_url('admin/add_product') ?>">Add Product</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/product') ?>">Product List</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/inbox') ?>">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>inbox</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-dark border-none d-md-none  mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                    
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="<?php echo site_url() ?>" target="_blank">
                                <i class="fas fa-globe fa-fw"></i>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama'); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url();?>assets/admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('login/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Product</h1>
                    <div class="row">
                      <div class="col-lg-6 col-md-8">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold">Edit Product</h6>
                            </div>
                            <div class="card-body">
                                <?php  
                                    foreach($produk as $data){
                                ?>
                                <?php echo form_open_multipart('Admin/edit_produk/'.$data->id);?>
                                <input type="hidden" name="id" value="<?php echo $data->id ?>">
                                <div class="form-group row">
                                  <label for="input" class="col-lg-12 col-form-label">Product Name :</label>
                                    <div class="col-lg-12">
                                      <input type="text" class="form-control" id="input" name="nama" value="<?php echo $data->nama;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input" class="col-lg-12 col-form-label">Price :</label>
                                    <div class="col-lg-12">
                                      <input type="number" class="form-control" id="input" name="harga" value="<?php echo $data->harga;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input" class="col-lg-12 col-form-label">No. WA :</label>
                                    <div class="col-lg-12">
                                      <input type="number" class="form-control" id="input" name="wa" value="<?php echo $data->wa;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input" class="col-lg-12 col-form-label">Kategori :</label>
                                    <div class="col-lg-12">
                                    <select name="kategori" id="input" class="form-control" required>
                                      <option value="" disabled>-- Choose Category --</option>
                                      <?php
                                        if($data->kategori == "coffe"){
                                            echo'<option value="coffe">Coffe</option>
                                            <option value="furniture">Furniture</option>
                                            <option value="spices">Spices</option>';
                                        }elseif($data->kategori == "furniture"){
                                            echo'<option value="furniture">furniture</option>
                                            <option value="coffe">Coffe</option>
                                            <option value="spices">Spices</option>';
                                        }else{
                                            echo'<option value="spices">Spices</option>
                                            <option value="furniture">furniture</option>
                                            <option value="coffe">Coffe</option>>';
                                        }
                                      ?>
                                    </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                  <label for="input" class="col-lg-12 col-form-label">gambar :</label>
                                    <div class="col-lg-12">
                                      <input type="file" class="form-control" id="input" name="gambar" value="<?php echo $data->gambar;?>">
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                  <label for="input" class="col-lg-12 col-form-label">deskripsi :</label>
                                    <div class="col-lg-12">
                                      <textarea class="form-control" style="white-space: pre-line;" name="deskripsi" row="1"><?php echo $data->deskripsi;?></textarea>
                                    </div>
                                </div>
                                <hr>
                                    <button type="submit" name="submit" class="btn btn-secondary">Simpan</button>
                                    <?php echo form_close(); ?> 
                                    <?php 
                                        }
                                    ?>   
                            </div>
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
                        <span>Copyright &copy; Rintizan 2021</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url();?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url();?>assets/admin/js/demo/datatables-demo.js"></script>


</body>

</html>