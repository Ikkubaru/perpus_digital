         <!--  Start -->
         <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">History Peminjaman Buku</h1>
                </div>
                <!-- <a href="<?= base_url('Admin/laporan') ?>" class="btn btn-info">Cetak Laporan</a> -->
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Nama Peminjam</th>
                                    <th scope="col">Email Peminjam</th>
                                    <th scope="col">Alamat Peminjam</th>
                                    <th scope="col">Tanggal Meminjam</th>
                                    <th scope="col">Tanggal Dikembalikan</th>
                                    <th scope="col">Terlambat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1; 
                                foreach($clear as $selesai){ ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $selesai['judul'] ?></td>
                                    <td><?= $selesai['nama_lengkap'] ?></td>
                                    <td><?= $selesai['email'] ?></td>
                                    <td><?= $selesai['alamat'] ?></td>
                                    <td><?= $selesai['tgl_dipinjam'] ?></td>
                                    <td><?= $selesai['tgl_dikembalikan'] ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end -->