         <!--  Start -->
         <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">Peminjaman Sedang Berjalan</h1>
                </div>
                <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <?php foreach($peminjaman as $pinjam){ ?>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                                <div class="form-floating mb-3">
                                    <form action="<?= base_url('Admin/pinjam/returnBook/'.$pinjam['id_buku']) ?>" method="POST">
                                        <input type="hidden" name="id_buku" value="<?=$pinjam['id_user'] ?>">
                                    <label for="floatingText">Nama Peminjam</label>
                                        <input type="text" name="nama_lengkap" value="<?= $pinjam['nama_lengkap'] ?>" class="form-control" readonly>
                                    <label for="floatingText">Username Peminjam</label>
                                        <input type="text" name="username" value="<?= $pinjam['username'] ?>" class="form-control" readonly>
                                    <label for="floatingText">Judul Buku yang Dipinjam</label>
                                        <input type="text" name="judul" value="<?= $pinjam['judul'] ?>" class="form-control" readonly>
                                    <label for="floatingText">Tanggal Meminjam</label>
                                        <input type="text" name="tgl_dipinjam" value="<?= $pinjam['tgl_dipinjam'] ?>" class="form-control" readonly> <br>
                                    <label for="floatingText">Lama Meminjam</label>
                                        <input type="text" name="lama_meminjam" value="<?= $pinjam['lama_meminjam'] ?> Hari" class="form-control" readonly> <br>
                                        <input type="hidden" name="tgl_dikembalikan" value="<?= date('Y-m-d'); ?>">
                                        <center>
                                            <img src="<?= base_url('assets/cover/'.$pinjam['cover']) ?>" width="200px" height="300px"> <br>
                                            <br>
                                        <button type="submit" value="" name="" class="btn btn-info">Return</button>
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