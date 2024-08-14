         <!--  Start -->
         <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">Kelola Admint </h1>
                </div>
                <a href="<?= base_url('Admin/user/tambahAdmin') ?>"><button class="btn btn-info">Tambah Admin</button></a>
                <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1; 
                                foreach($admint as $admin){ ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $admin['username'] ?></td>
                                <td><?= $admin['email'] ?></td>
                                <td><?= $admin['nama_lengkap'] ?></td>
                                <td><?= $admin['alamat'] ?></td>
                                <td><?= $admin['no_hp'] ?></td>
                                <td>
                                    <a href="<?= base_url('Admin/user/deleteAdmin/'.$admin['id_user']) ?>"><button class="btn btn-danger">Delete</button></a>
                                    <a href="<?= base_url('Admin/user/editAdmin/'.$admin['id_user']) ?>"><button class="btn btn-warning">Edit</button></a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->
        </div>
            <!--  End -->
        </div>
        <!-- Content End -->