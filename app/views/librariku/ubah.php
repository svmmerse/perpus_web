<div class="container">
    <div class="card">
        <h5 class="card-header">
            Ubah Buku
        </h5>
        <ul class="list-group list-group-flush">
            <form action="<?= BASEURL ?>librariku/ubahLibrariku/<?= $data['librariku']['id'] ?>" method="post">
                <li class="list-group-item">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama Buku</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Buku" value="<?= $data['librariku']['nama'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="<?= $data['librariku']['id_kategori'] ?>"><?= $data['librariku']['kategori'] ?></option>
                                <option value="1">Ilmiah</option>
                                <option value="2">Asing</option>
                                <option value="3">Campuran</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="<?= $data['librariku']['deskripsi'] ?>" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="deskripsi">Harga (Rupiah)</label>
                            <input type="number" class="form-control" name="harga" placeholder="harga" value="<?= $data['librariku']['harga'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="deskripsi">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" placeholder="jumlah" value="<?= $data['librariku']['jumlah'] ?>" required>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </li>
            </form>
            <li class="list-group-item">
                <div>
                    <label> Foto </label>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto1 = $data['librariku']['foto1'];
                        if (!empty($foto1)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto1; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>librariku/hapusFoto1/<?= $data['librariku']['id'] ?>/<?= $foto1 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto1)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>librariku/ubahFoto1/<?= $data['librariku']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto1" name="foto1" aria-describedby="foto1" required>
                                    <label class="custom-file-label" for="foto1">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto1">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto2 = $data['librariku']['foto2'];
                        if (!empty($foto2)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto2; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>librariku/hapusFoto2/<?= $data['librariku']['id'] ?>/<?= $foto2 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto2)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>librariku/ubahFoto2/<?= $data['librariku']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto2" name="foto2" aria-describedby="foto2" required>
                                    <label class="custom-file-label" for="foto2">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto2">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto3 = $data['librariku']['foto3'];
                        if (!empty($foto3)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto3; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>librariku/hapusFoto3/<?= $data['librariku']['id'] ?>/<?= $foto3 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto3)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>librariku/ubahFoto3/<?= $data['librariku']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto3" name="foto3" aria-describedby="foto3" required>
                                    <label class="custom-file-label" for="foto3">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto3">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto4 = $data['librariku']['foto4'];
                        if (!empty($foto4)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto4; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>librariku/hapusFoto4/<?= $data['librariku']['id'] ?>/<?= $foto4 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto4)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>librariku/ubahFoto4/<?= $data['librariku']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto4" name="foto4" aria-describedby="foto4" required>
                                    <label class="custom-file-label" for="foto4">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto4">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto5 = $data['librariku']['foto5'];
                        if (!empty($foto5)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto5; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>librariku/hapusFoto5/<?= $data['librariku']['id'] ?>/<?= $foto5 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto5)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>librariku/ubahFoto5/<?= $data['librariku']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto5" name="foto5" aria-describedby="foto5" required>
                                    <label class="custom-file-label" for="foto5">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto5">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto6 = $data['librariku']['foto6'];
                        if (!empty($foto6)) { ?>
                            <img src="<?= BASEURL ?>app/models/barang/<?= $foto6; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>librariku/hapusFoto6/<?= $data['librariku']['id'] ?>/<?= $foto6 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto6)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>librariku/ubahFoto6/<?= $data['librariku']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto6" name="foto6" aria-describedby="foto6" required>
                                    <label class="custom-file-label" for="foto6">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto6">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>