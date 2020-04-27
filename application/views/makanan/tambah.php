<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Form Tambah Data Makanan</h5>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="namamakanan">Nama Makanan</label>
                            <input type="text" class="form-control" id="namamakanan" name="namamakanan">
                            <small class="form-text text-danger"><?= form_error('namamakanan'); ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="komposisi">Komposisi</label>
                            <input type="text" class="form-control" id="komposisi" name="komposisi">
                            <small class="form-text text-danger"><?= form_error('komposisi'); ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>