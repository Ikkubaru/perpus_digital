         <!--  Start -->
         <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">Edit User</h1>
                </div>
                <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form action="<?= base_url('Admin/user/updateUser/'.$id_user) ?>" method="POST">
                                <label for="floatingText">Username</label>
                                    <input class="form-control mb-3" type="text"   name="username" value="<?= $username ?>">
                                <label for="floatingText">Email</label>
                                    <input class="form-control mb-3" type="text"    name="email" value="<?= $email ?>">
                                <label for="floatingText">Nama Lengkap</label>
                                    <input class="form-control mb-3" type="text"    name="nama_lengkap" value="<?= $nama_lengkap ?>">
                                <label for="floatingText">Alamat</label>
                                    <input class="form-control mb-3" type="text"    name="alamat" value="<?= $alamat ?>">
                                <label for="floatingText">Nomor HP</label>
                                    <input class="form-control mb-3" type="text"    name="no_hp" value="<?= $no_hp ?>">
                                    <button type="submit" class="btn btn-info">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->
        </div>
            <!--  End -->
        </div>
        <!-- Content End -->