<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product</title>

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
                    <?php echo $this->session->flashdata('sukses') ?>
                    <?php echo $this->session->flashdata('hapus') ?>
                    <?php echo $this->session->flashdata('edit') ?>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-lg-12">
                          <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3">
                                <div class="d-flex justify-content-between">
                                        <h6 class="m-0 font-weight-bold pt-2">Product List</h6>
                                        <a href="<?php echo site_url('admin/add_product') ?>" class="btn btn-secondary btn-icon-split pull-right">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus-circle" aria-hidden="true"></i>
                                            </span>
                                            <span class="text">Add Product</span>
                                        </a>
                                </div>                    
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>No. WA</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                    <?php
                                                        $no=1;
                                                        foreach($produk as $data){
                                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo htmlentities($data->kategori, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><img src="<?php echo base_url()?>assets/gambar/<?php echo $data->gambar;?>" alt="<?php echo $data->gambar;?>" class="img-thumbnail" width="100px"></td>
                                            <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                            <td>Rp. <?php echo number_format($data->harga)?></td>
                                            <td><?php echo htmlentities($data->wa, ENT_QUOTES, 'UTF-8');?></td>
                                            <td><?php echo htmlentities($data->deskripsi, ENT_QUOTES, 'UTF-8');?></td>
                                            <td>
                                                <a href="<?php echo base_url(); ?>admin/edit_product/<?php echo $data->id;?>" class="link-primary text-primary"> Edit </a>
                                                <a href="<?php echo base_url(); ?>admin/hapus_produk/<?php echo $data->id;?>" onclick="return confirm('Yakin Hapus?')" class="link-danger text-danger">  Hapus </a>
                                          </td>    
                                        </tr>
                                                    <?php
                                                        }
                                                    ?>                                   
                                    </tbody>
                                </table>
                            </div>
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