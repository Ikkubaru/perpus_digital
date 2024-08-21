<!-- Sidebar Start -->
                <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><?= $this->session->userdata('username') ?></h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link"><i class="fa fa-home"></i>Dashboard</a>
                    <a href="<?= base_url('Admin/user/profile') ?>" class="nav-item nav-link"><i class="fa fa-user"></i>Profile</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-book"></i>Books</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?= base_url('Admin/books') ?>" class="dropdown-item">All Books</a>
                            <a href="<?= base_url('Admin/kategori') ?>" class="dropdown-item">Categories</a>
                        </div>
                    </div>
                        <?php if($this->session->userdata('level')=='admin'){ ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-user"></i>User</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="<?= base_url('Admin/user') ?>" class="dropdown-item">Peminjam</a>
                                    <a href="<?= base_url('Admin/user/petugas') ?>" class="dropdown-item">Petugas</a>
                                    <a href="<?= base_url('Admin/user/admin') ?>" class="dropdown-item">Admin</a>
                                </div>
                            </div>
                        <?php }?>
                    <a href="<?= base_url('Admin/pinjam') ?>" class="nav-item nav-link"><i class="fa fa-book"></i>Pending</a>
                    <a href="<?= base_url('Admin/pinjam/ongoing') ?>" class="nav-item nav-link"><i class="fa fa-book"></i>OnGoing</a>
                    <a href="<?= base_url('Admin/pinjam/clear') ?>" class="nav-item nav-link"><i class="fa fa-book"></i>History Peminjaman</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->