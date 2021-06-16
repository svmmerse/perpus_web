<div class="container">
    <div class="card">
        <h5 class="card-header">
            Buku - Buku
            <a href="<?= BASEURL ?>librariku/tambah" class="btn btn-primary btn-sm float-right">Tambah</a>
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form id="cari" action="<?= BASEURL ?>librariku/cari" class="input-group p-2" method="POST">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Buku-buku" aria-label="cari" aria-describedby="cari" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="cari">Pencarian</button>
                    </div>
                </form>
            </li>
            <?php if (!$data['librariku']) { ?>
                <li class="list-group-item">
                    Belum ada hasil buku
                </li>
            <?php } else {
            foreach ($data['librariku'] as $librariku) : ?>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="float-left mr-3 mw-100" src="<?= BASEURL ?>app/models/barang/<?= $librariku['foto1']; ?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <a class="card-link float-left" href="<?= BASEURL ?>librariku/detail/<?= $librariku['id']; ?>">
                                <div class="">
                                    <h5 class="text-body"><?= $librariku['nama']; ?></h5>
                                    <p class="text-muted small">Ditambahkan sejak <?= $librariku['created_at']; ?> </p>
                                    <p class="text-muted">Rp. <?= $librariku['harga']; ?></p>
                                    <p class="text-body"><?= $librariku['deskripsi']; ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?= BASEURL ?>librariku/hapus/<?= $librariku['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ?');">hapus</a>
                            <a href="<?= BASEURL ?>librariku/ubah/<?= $librariku['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>
                        </div>
                    </div>
                </li>
            <?php endforeach;
        } ?>
        </ul>
    </div>
</div>