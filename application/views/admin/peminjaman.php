         <!--  Start -->
         <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">Persetujuan Peminjaman Buku</h1>
                </div>
                <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <?php foreach($peminjaman as $pinjam){ ?>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                                <div class="form-floating mb-3">
                                    <form action="<?= base_url('Admin/pinjam/simpan/'.$pinjam['id_user']) ?>" method="POST">
                                        <input type="hidden" name="id_buku" value="<?=$pinjam['id_buku'] ?>">
                                    <label for="floatingText">Nama Peminjam</label>
                                        <input type="text" name="nama_lengkap" value="<?= $pinjam['nama_lengkap'] ?>" class="form-control" readonly>
                                    <label for="floatingText">Username Peminjam</label>
                                        <input type="text" name="username" value="<?= $pinjam['username'] ?>" class="form-control" readonly>
                                    <label for="floatingText">Judul Buku yang Dipinjam</label>
                                        <input type="text" name="judul" value="<?= $pinjam['judul'] ?>" class="form-control" readonly>
                                    <label for="floatingText">Tanggal Meminjam</label>
                                        <input type="text" name="tgl_dipinjam" value="<?= $pinjam['tgl_dipinjam'] ?>" class="form-control" readonly> <br>
                                    <label for="floatingText">Lama Meminjam</label>
                                        <input type="text" name="lama_meminjam" value="<?= $pinjam['lama_meminjam'] ?>" class="form-control" readonly> <br>
                                        <center>
                                            <img src="<?= base_url('assets/cover/'.$pinjam['cover']) ?>" width="200px" height="300px"> <br>
                                            <br>
                                        <a href=""><button type="submit" value="ditolak" name="status" class="btn btn-danger">Tolak</button></a>
                                        <a href=""><button type="submit" value="disetujui" name="status" class="btn btn-success">Setuju</button></a>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>
            <!-- Form End -->
        </div>
            <!--  End -->
        </div>
        <!-- Content End -->