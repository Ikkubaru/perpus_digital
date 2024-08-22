         <!--  Start -->
         <div class="container-fluid pt-4 px-4">
             <h1 class="mb-0">Profile</h1>
             <a href="<?= base_url('admin/laporan/Luser') ?>" class="btn btn-info">Print All User (PDF)</a>
                <div class="bg-light rounded h-100 p-4">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" value="<?= $this->session->userdata('username') ?>" readonly>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" value="<?= $this->session->userdata('email') ?>" readonly>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" value="<?= $this->session->userdata('nama_lengkap') ?>" readonly>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" value="<?= $this->session->userdata('alamat') ?>" readonly>
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Nomor HP</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" value="<?= $this->session->userdata('no_hp') ?>" readonly>
                                        </div>
                                </div>
                </div>
            <!--  End -->
        </div>
        <!-- Content End -->