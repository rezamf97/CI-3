<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Form Ubah Data Makanan</h5>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $makanan['id']; ?>">
                        <div class="form-group">
                            <label for="namamakanan">Nama Makanan</label>
                            <input type="text" class="form-control" id="namamakanan" name="namamakanan" value="<?= $makanan['namamakanan']; ?>">
                            <small class="form-text text-danger"><?= form_error('namamakanan'); ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $makanan['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="komposisi">Komposisi</label>
                            <input type="text" class="form-control" id="komposisi" name="komposisi" value="<?= $makanan['komposisi']; ?>">
                            <small class="form-text text-danger"><?= form_error('komposisi'); ?>.</small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>