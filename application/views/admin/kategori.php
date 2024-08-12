         <!--  Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">Kelola Kategori Buku</h1>
                </div>
                <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form action="<?= base_url('admin/kategori/save') ?>" method="POST">
                                <input class="form-control mb-3" type="text" placeholder="Nama Kategori"
                                    aria-label="default input example" name="nama_kategori">
                                    <button type="submit" class="btn btn-info">Save</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no =1;
                                foreach($categories as $kategori){ ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $kategori['nama_kategori'] ?></td>
                                    <td>
                                        <a onClick="return confirm('Yakin ingin Menghapus?')" href="<?= base_url('Admin/kategori/delete/'.$kategori['id_kategori']) ?>" class="btn btn-danger">Delete</a>
                                        <a href="<?= base_url('Admin/kategori/edit/'.$kategori['id_kategori']) ?>" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php }?>
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