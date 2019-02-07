<div class="container">
<div class="row mt-3">
    <div class="col-md-6">
    <div class="card">
    <h5 class="card-header">Form Tambah Data Barang</h5>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?= $this->form_validation->set_value('nama_barang');
                ?>">
                <small class="form-text text-danger"><?= form_error('nama_barang')?></small>
                </div>
                <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input type="text" class="form-control" name="harga_barang" id="harga_barang" value="<?= $this->form_validation->set_value('harga_barang');
                ?>">
                <small class="form-text text-danger"><?= form_error('harga_barang')?></small>
                </div>
                <div class="form-group">
                <label for="id_kategori">Id Kategori</label>
                <input type="text" class="form-control" name="id_kategori" id="id_kategori" value="<?= $this->form_validation->set_value('id_kategori');
                ?>">
                <small class="form-text text-danger"><?= form_error('id_kategori')?></small>
                </div>
                <div class="form-group">
                <label for="gambar">Picture</label>
                <input type="text" class="form-control" name="gambar" id="gambar" value="<?= $this->form_validation->set_value('gambar');
                ?>">
                <small class="form-text text-danger"><?= form_error('gambar')?></small>
                </div>
                <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-control">
                    <?php
                        foreach ($genre as $g ) {?>
                            <option value="<?= $g['id_genre']?>"><?= $g['genre']?></option>
                       <?php }
                    ?>
                </select>
                </div>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </form>
        </div>
    </div>
    </div>
</div>
</div>