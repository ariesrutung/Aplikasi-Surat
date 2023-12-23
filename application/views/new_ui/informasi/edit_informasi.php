<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Informasi</h6>
                </div>
                <?php echo form_open_multipart(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="judul" class="form-control-label">Judul</label>
                                <input class="form-control" name="judul" id="judul" type="text" value="<?= $informasi['judul']; ?>" />
                                <?= form_error('judul', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="isi" class="form-control-label">Isi</label>
                                <input class="form-control" name="isi" id="isi" type="text" value="<?= $informasi['isi']; ?>" />
                                <?= form_error('isi', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lokasi" class="form-control-label">Lokasi</label>
                                <input class="form-control" name="lokasi" id="lokasi" type="text" value="<?= $informasi['lokasi']; ?>" />
                                <?= form_error('lokasi', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="gambar" class="form-control-label">Gambar</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                                <?= form_error('gambar', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ket_gambar" class="form-control-label">Keterangan Gambar</label>
                                <input type="text" class="form-control datepicker" name="ket_gambar" id="ket_gambar" value="<?= $informasi['ket_gambar']; ?>" />
                                <?= form_error('ket_gambar', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tanggal" class="form-control-label">Tanggal</label>
                                <input class="form-control" name="tanggal" id="tanggal" type="date" value="<?= $informasi['tanggal']; ?>" />
                                <?= form_error('tanggal', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Informasi</label>
                            <select class="form-select" id="kategori" name="kategori" required>
                                <option value=""> - Pilih -</option>
                                <option value="berita">Berita</option>
                                <option value="pengumuman">Pengumuman</option>
                                <option value="pelatihan">Pelatihan</option>
                            </select>
                        </div>
                    </div>
                    <div class="category form-category">
                        <div class="form-footer text-right">
                            <button type="submit" class="btn btn-success btn-fill">simpan</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>