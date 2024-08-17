<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Ikubaru Library</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?= base_url('assets/frontend/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/frontend/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?= base_url('assets/frontend/') ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?= base_url('assets/frontend/') ?>css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <?php if($this->session->userdata('id_user') == NULL){ ?>
                    <a class="navbar-brand"><h1 class="text-primary display-6">Ikubaru Library</h1></a>
                    <a href="" class="navbar-toggler py-2 px-3">
                        <span class="fa fa-user text-primary"></span>
                    </a>
                    <?php } else{?>
                    <a class="navbar-brand"><h1 class="text-primary display-6">Ikubaru Library</h1></a>
                    <a href="" class="navbar-toggler py-2 px-3">
                        <span class="fa fa-arrow-left text-primary"></span>
                    </a>
                        <?php }?>
                    <!--  -->
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">

                        </div>
                        <div class="d-flex m-3 me-0">
                            <a href="<?= base_url('home/book') ?>" class="position-relative me-4 my-auto">
                                <i class="fa fa-book fa-2x"></i>
                            </a>
                            <?php if($this->session->userdata('id_user') == NULL){ ?>
                            <a href="<?= base_url("auth/login") ?>" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                            <?php }else{ ?>
                            <a href="<?= base_url("auth/logout") ?>" class="my-auto">
                                <i class="fas fa-arrow-left fa-2x"></i>
                            </a>
                                <?php } ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->



        <!-- Featurs Section Start -->
        <div class="container-fluid featurs py-5">
        </div>
        <!-- Featurs Section End -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="tab-content">
                        <div class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                    <h2>Buku Dipinjam</h2>
                                        <!-- start foreach -->
                                        <?php foreach($book as $buku){ ?>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="<?= base_url('assets/cover/'.$buku['cover']) ?>" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4><?= $buku['judul'] ?></h4>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>    
                                    <!-- end foreach -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>