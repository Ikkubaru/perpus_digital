         <!--  Start -->
         <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                    </div>
					<h1 class="mb-0">Edit Buku</h1>
                </div>
                <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <center>
                            <img src="<?= base_url('assets/cover/'.$cover) ?>" width="250px" height="350px"> 
                        </center> <br>
                        <div class="bg-light rounded h-100 p-4">
                            <form action="<?= base_url('Admin/books/updateBook/'.$id_buku) ?>" method="POST" enctype="multipart/form-data">
                            <label for="floatingText">Judul</label>
                                <input class="form-control mb-3" type="text"    name="judul" value="<?= $judul ?>">
                            <label for="floatingText">Penulis</label>
                                <input class="form-control mb-3" type="text"    name="penulis" value="<?= $penulis ?>">
                            <label for="floatingText">Tahun Terbit</label>
                                <input class="form-control mb-3" type="number"  name="tahun_terbit" value="<?= $tahun_terbit ?>">
                            <label for="floatingText">Stok Buku </label>
                                <input class="form-control mb-3" type="number"  name="available" value="<?= $available ?>">
                            <label for="floatingText">Cover Buku</label>
                                <input class="form-control mb-3" type="file"    name="cover" value="<?= $cover ?>" accept="image/png, image/jpg, image/jpeg">
                            <label for="floatingText">Sinopsis Buku</label>
                                <textarea  name="sinopsis" class="form-control"><?= $sinopsis ?></textarea> <br>
                                    <button type="submit" class="btn btn-info">Save</button>
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