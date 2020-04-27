<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Detail Daftar Makanan</h5>
                <div class="card-body">
                    <h5 class="card-title"><?= $makanan['namamakanan']; ?></h5>
                    <p class="card-text"><?= $makanan['harga']; ?></p>
                    <p class="card-text"><?= $makanan['komposisi']; ?></p>
                    <a href="<?= base_url(); ?>makanan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>