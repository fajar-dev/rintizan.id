<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url()?>/assets/home/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/home/css/style.css">

    <title>Rintizan.id</title>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm bg-body rounded fixed-top py-4 py-lg-0 navbar-nd ">
        <div class="container">
          <a class="navbar-brand" href="#">
           <h3>Rintizan.ID</h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="<?php echo site_url() ?>">Home</a>
              <a class="nav-link" href="<?php echo site_url('product') ?>">Product</a>
              <a class="nav-link" href="<?php echo site_url('contact') ?>">Contact</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="geser">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="<?php echo base_url()?>/assets/home/img/rempah.jpg" style="background-size: cover;"  alt="">
              <div class="container">
                <div class="carousel-caption text-start mb-5 col-lg-5">
                  <h1>Spices</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi aliquam, dolorum dolor accusamus reiciendis numquam voluptatum enim quod perferendis, </p>
                  <p><a class="btn btn-warning" href="<?php echo site_url('category/spices') ?>">View More</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url()?>/assets/home/img/kopi.jpg" style="background-size: cover;" alt="">      
              <div class="container">
                <div class="carousel-caption text-start mb-5 col-lg-5">
                  <h1>Coffe</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi aliquam, dolorum dolor accusamus reiciendis numquam voluptatum enim quod perferendis, </p>
                  <p><a class="btn btn-warning" href="<?php echo site_url('category/coffe') ?>">View More</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item active">
              <img src="<?php echo base_url()?>/assets/home/img/furniture.jpg" style="background-size: cover;" alt="">
              <div class="container">
                <div class="carousel-caption text-start mb-5 col-lg-5">
                  <h1>Furniture</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi aliquam, dolorum dolor accusamus reiciendis numquam voluptatum enim quod perferendis, </p>
                  <p><a class="btn btn-warning" href="<?php echo site_url('category/furniture') ?>">View More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="wraper">
        <div class="container marketing">
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">We provide various kind of services for you</h2>
              <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis eaque sit qui harum a fugiat nisi similique quas laudantium, eligendi velit ducimus eos unde, mollitia debitis molestias optio accusantium voluptatum!</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url()?>/assets/home/img/img2.png" alt="" >
            </div>
          </div>
        </div>
      </section>
      <section class="wraper">
        <div class="container marketing">
          <div class="row featurette">
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url()?>/assets/home/img/img3.png" alt="" >
            </div>
            <div class="col-md-7">
              <h2 class="featurette-heading">We provide various kind of services for you</h2>
              <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis eaque sit qui harum a fugiat nisi similique quas laudantium, eligendi velit ducimus eos unde, mollitia debitis molestias optio accusantium voluptatum!</p>
            </div>
          </div>
        </div>
      </section>
      <section class="wrape">
        <div class="container">
          <div class="row justify-content-center kategori">
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-4 mt-4">
                  <a href="<?php echo site_url('category/coffe') ?>">
                    <div class="card shadow">
                      <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-3">
                              <img src="<?php echo base_url()?>/assets/home/img/kopi.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-9">
                              <h4>Coffe</h4>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mt-4">
                  <a href="<?php echo site_url('category/spices') ?>">
                    <div class="card shadow">
                      <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-3">
                              <img src="<?php echo base_url()?>/assets/home/img/rempah.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-9">
                              <h4>Spices</h4>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 mt-4">
                  <a href="<?php echo site_url('category/furniture') ?>">
                    <div class="card shadow">
                      <div class="card-body">
                          <div class="row align-items-center">
                            <div class="col-3">
                              <img src="<?php echo base_url()?>/assets/home/img/furniture.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-9">
                              <h4>Furniture</h4>
                            </div>
                          </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <section class="wraper produk" id="testimoni">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 mb-2 mt-lg-5">
                <h1 class="mb-3 mt-lg-5">Our Product</h1>
                  <a href="<?php echo site_url('product') ?>" class="text-decoration-none"><p class="text-warning">View More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p></a>
              </div>
                      <?php
                        foreach($produk as $data){
                      ?>
              <div class="col-lg-3 mb-2 mt-lg-5">
                <div class="card home">
                  <div class="card-body">
                    <div class="row">
                      <img src="<?php echo base_url()?>assets/gambar/<?php echo $data->gambar;?>" class="img-fluid mb-4" alt="gambar <?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?>" width="60">
                      <span class="text-warning"><i class="fa fa-tags" aria-hidden="true"></i> <?php echo ucfirst($data->kategori);?></span>
                      <h2 class="mt-2"><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></h2>
                      <h5 class="py-2">IDR. <?php echo number_format($data->harga)?></h5>
                      <a href="<?php echo base_url()?>page/detail/<?php echo $data->id ?>" class="btn btn-warning mt-4"><i class="fa fa-info-circle" aria-hidden="true"></i> Details</a>
                    </div>
                  </div>  
                </div>           
              </div>
                      <?php
                        }
                      ?>
            </div>
          </div>
        </section>
      </section>
    </main>
    <footer>
      <section class="bottom">
        <div class="pt-4 pt-md-5">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-12">
                <!-- <img class="mb-2" src="img/logo.png" alt="" height="50"> -->
                <h1 class="text-light">Rintizan.ID</h1>
              </div>
              <div class="col-lg-2 col-md-4 mb-3">
                <h5 class="text-white">Information</h5>
                <ul class="list-unstyled text-small">
                  <li class="mb-1"><a class="text-white text-decoration-none" href="http://wa.me/62895611024559"> +62 895 6110 24559 </a></li>
                  <li class="mb-1"><a class="text-white text-decoration-none" href="mailto:cs@asetpedia.id">cs@rintizan.id </a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-4 mb-3">
                <h5 class="text-white">Product</h5>
                <ul class="list-unstyled text-small">
                  <li class="mb-1"><a class="text-white text-decoration-none" href="<?php echo site_url('category/coffe') ?>">Coffe</a></li>
                  <li class="mb-1"><a class="text-white text-decoration-none" href="<?php echo site_url('category/spices') ?>">Spices</a></li>
                  <li class="mb-1"><a class="text-white text-decoration-none" href="<?php echo site_url('category/furniture') ?>">Furniture</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-4 mb-3">
                <h5 class="text-white">Office</h5>
                <ul class="list-unstyled text-small">
                  <p class="text-small text-white mb-1">JL Medan Banda Aceh, Komplek Kampus Unimal, Blang Pulo, Kec. Muara Satu, Kota Lhokseumawe, NAD </p> 
              </div>
            </div>
            <div class="row text-center">
              <hr>
              <div class="col-md-6 py-3 text-lg-start">
                Copyright &copy; 2021, Rintizan.ID
              </div>
              <div class="col-md-6 py-3 text-lg-end d-none d-md-block d-lg-block">
                <i class="fa fa-envelope-o" aria-hidden="true"></i> admin@rintizan.id
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo base_url()?>/assets/home/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
