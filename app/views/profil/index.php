<div class="container">
    <div class="card">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">
            <div class="mb-3" style="width: 100%; height: 200px; background:url('<?= BASEURL ?>assets/img/picture/abstract-green-wallpapers-hd-desktop-and-mobile-backgrounds.jpg'); background-size: 100% 200px">
                <img src="<?= BASEURL ?>app/models/cover/<?= $data['user']['cover'] ?>" alt="" width="100%" height="100%">
            </div>
            <div class="float-left mr-3 rounded-circle" style="width: 200px; height: 200px;  background:url('<?= BASEURL ?>assets/img/icon/5925094_4_256x256_1495095625.png'); background-size: 200px 200px"">
                <img class=" rounded-circle" src="<?= BASEURL ?>app/models/foto/<?= $data['user']['foto'] ?>" alt="" width="100%" height="100%">
            </div>
            <h5 class="card-title "><?= $data['user']['nama'] ?></h5>
            Email : <?= $data['user']['email'] ?> <br>
            Nomor : <?= $data['user']['nomor_telepon'] ?> <br>
            <p class="card-text text-muted">Member sejak <?= $data['user']['created_at'] ?> </p>
            <a href="<?= BASEURL ?>pengaturan" class="btn btn-outline-info btn-sm">Edit</a>
        </div>
    </div>
    <div class="card mt-5">
        <h5 class="card-header">
            Hasil Buku
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form class="input-group" action="" method="post">
                    <input type="text" class="form-control" placeholder="Cari Buku" aria-label="Cari Buku" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
            </li>
            <?php if (!$data['librariku']) : ?>
                <li class="list-group-item">
                    Belum ada hasil buku
                </li>
            <?php else :
                foreach ($data['librariku'] as $librariku) : ?>
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
            endif;?>
        </ul>
    </div>
</div>