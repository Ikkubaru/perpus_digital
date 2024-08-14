<div class="container-fluid pt-4 px-4">
<div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">Tambah Admin</h1>
                </div>
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form action="<?= base_url('Admin/user/adminSimpan') ?>" method="POST">
                                <input class="form-control mb-3" type="text" placeholder="Username" aria-label="default input example" name="username" required>
                                <input class="form-control mb-3" type="password" placeholder="Passwrod" aria-label="default input example" name="password" required>
                                <input class="form-control mb-3" type="email" placeholder="Email" aria-label="default input example" name="email" required>
                                <input class="form-control mb-3" type="text" placeholder="Nama Lengkap" aria-label="default input example" name="nama_lengkap" required>
                                <input class="form-control mb-3" type="text" placeholder="Alamat" aria-label="default input example" name="alamat" required>
                                <input class="form-control mb-3" type="number" placeholder="Nomor Telepon" aria-label="default input example" name="no_hp" required>
                                <select name="level" class="form-control">
                                    <option value="admin" class="form-control" selected>Admint</option>
                                </select>
                                <br>
                                    <button type="submit" class="btn btn-info">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>