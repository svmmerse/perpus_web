<div class="container">
    <div class="card mt-5">
        <h5 class="card-header">
            Nama - Nama Buku
        </h5>
        <ul class="list-group list-group-flush">
            <?php if (!$data['hasil_panen']) { ?>
                <li class="list-group-item">
                    Kosong
                </li>
            <?php } else {
            foreach ($data['hasil_panen'] as $librariku) : ?>
                <li class="list-group-item ">
                    <a class="card-link" href="<?= BASEURL ?>librariku/detail/<?= $librariku['id']; ?>">
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <img class="" src="<?= BASEURL ?>app/models/barang/<?= $librariku['foto1']; ?>" alt="" width="100%;">
                            </div>
                            <div class="col-md-7">
                                <h5 class="text-body"><?= $librariku['nama']; ?></h5>
                                <p class="text-body"><?= $librariku['deskripsi']; ?></p>
                            </div>
                            <div class="col-md-3 d-flex align-items-end flex-column">
                                <p class="text-muted">Rp. <?= $librariku['harga']; ?>/Kg</p>
                                <p class="text-muted small mt-auto">
                                    Ditambahkan sejak <?= $librariku['created_at']; ?> <br>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach;
        } ?>
        </ul>
    </div>
</div>