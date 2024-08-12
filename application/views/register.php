<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/backend/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/backend/') ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/backend/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/backend/') ?>css/style.css" rel="stylesheet">
</head>

<body       >
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a  class="">
                                <h3 class="text-primary">Library</h3>
                            </a>
                            <h3>Register</h3>
                        </div>
                        <form action="<?= base_url('Auth/registerSave') ?>" method="POST">
                        <input type="hidden" name="level" value="user">
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingText" placeholder="Username" name="username" required>
                            <label for="floatingText">Username</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="password" class="form-control" id="floatingText" placeholder="Password" name="password" required>
                            <label for="floatingInput">Password</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="email" class="form-control" id="floatingText" placeholder="Email" name="email" required>
                            <label for="floatingPassword">Email</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingText" placeholder="Nama Lengkap" name="nama_lengkap" required>
                            <label for="floatingText">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingText" placeholder="Alamat" name="alamat" required>
                            <label for="floatingText">Alamat</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="text" class="form-control" id="floatingText" placeholder="Nomor HP" name="no_hp" required>
                            <label for="floatingText">Nomor HP</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        <p class="text-center mb-0">Already have an Account? <a href="<?= base_url('Auth') ?>">Sign In</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/backend/') ?>lib/chart/chart.min.js"></script>
    <script src="<?= base_url('assets/backend/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/backend/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/backend/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/backend/') ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url('assets/backend/') ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url('assets/backend/') ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/backend/') ?>js/main.js"></script>
</body>

</html>