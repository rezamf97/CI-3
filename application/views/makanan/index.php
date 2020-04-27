<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Makanan <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('makanan/tambah'); ?>" class="btn btn-primary">Tambah Data Makanan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data makanan..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Makanan</h3>
            <!-- Kalau tidak ada data makanan -->
            <?php if (empty($makanan)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data makanan tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($makanan as $mkn) : ?>
                    <li class="list-group-item"><?= $mkn['namamakanan']; ?>
                        <a href="<?= base_url(); ?>makanan/hapus/<?= $mkn['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin?');">Hapus</a>
                        <a href="<?= base_url(); ?>makanan/ubah/<?= $mkn['id']; ?>" class="badge badge-success float-right">Ubah</a>
                        <a href="<?= base_url(); ?>makanan/detail/<?= $mkn['id']; ?>" class="badge badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>