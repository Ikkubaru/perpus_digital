         <!--  Start -->
         <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">Kelola Kategori Buku</h1>
                </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Buku
            </button>
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">{component name}</h6>
                    </div>
					<h1 class="mb-0">Semua Buku</h1>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Tahun Terbit</th>
                                    <th scope="col">Sinopsis</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1; 
                                foreach($book as $buku){ ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><img src="<?= base_url('assets/cover/'.$buku['cover'])?>" width="150px" height="200px"></td>
                                    <td><?= $buku['judul'] ?></td>
                                    <td><?= $buku['penulis'] ?></td>
                                    <td><?= $buku['tahun_terbit'] ?></td>
                                    <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sinopsisModal<?=$buku['id_buku']?>">
                                    Lihat Sinopsis
                                    </button>
                                    </td>
                                    <td><?= $buku['available'] ?></td>
                                    <td>
                                        <a onClick="return confirm('Yakin Menghapus?')" href="<?= base_url('Admin/books/deleteBook/'.$buku['id_buku']) ?>" class="btn btn-danger">Delete</a> <br> <br>
                                        <a href="<?= base_url('Admin/books/editBook/'.$buku['id_buku']) ?>" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                                  <!-- sinopsis -->
                                <div class="modal fade" id="sinopsisModal<?=$buku['id_buku']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Sinopsis - <?= $buku['judul'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><?= $buku['sinopsis'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end sinopsis -->
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end -->
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('Admin/books/save') ?>" method="POST" enctype="multipart/form-data">
                        <input type="text" name="judul" placeholder="Judul Buku" class="form-control" required> <br>
                        <input type="text" name="penulis" placeholder="Penulis Buku" class="form-control"> <br>
                        <input type="number" name="tahun_terbit" placeholder="Tahun Terbit Buku" class="form-control" min="0" step="1"> <br>
                        <input type="file" name="cover" placeholder="Cover Buku" class="form-control" accept="image/png, image/jpg, image/jpeg"> <br>
                        <input type="number" name="available" placeholder="Stok Buku" class="form-control"> <br>
                        <select name="kategori" class="form-control">
                            <?php foreach($categories as $kategori){ ?>
                            <option value="<?= $kategori['id_kategori'] ?>" class="form-control"><?= $kategori['nama_kategori'] ?></option>
                            <?php } ?>
                        </select> <br>
                        <textarea  name="sinopsis" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- Content End -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>