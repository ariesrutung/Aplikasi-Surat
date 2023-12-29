<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Penduduk</h6>
                </div>
                <?php echo form_open_multipart(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nik" class="form-control-label">NIK</label>
                        <input class="form-control" name="nik" id="nik" type="text" value="<?= set_value('nik'); ?>" />
                        <?= form_error('nik', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="nama" class="form-control-label">Nama Lengkap</label>
                        <input class="form-control" name="nama" id="nama" type="text" value="<?= set_value('nama'); ?>" />
                        <?= form_error('nama', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="tmpt_lhr" class="form-control-label">Tempat Lahir</label>
                        <input class="form-control" name="tmpt_lhr" id="tmpt_lhr" type="text" value="<?= set_value('tmpt_lhr'); ?>" />
                        <?= form_error('tmpt_lhr', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="tgl_lhr" class="form-control-label">Tanggal Lahir</label>
                        <input type="date" class="form-control datepicker" name="tgl_lhr" id="tgl_lhr" value="10/10/2016" />
                        <?= form_error('tgl_lhr', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="form-control-label">Alamat</label>
                        <input class="form-control" name="alamat" id="alamat" type="text" value="<?= set_value('alamat'); ?>" />
                        <?= form_error('alamat', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="no_hp" class="form-control-label">No. Hp</label>
                        <input class="form-control" name="no_hp" id="no_hp" type="text" value="<?= set_value('no_hp'); ?>" />
                        <?= form_error('no_hp', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="pekerjaan" class="form-control-label">Pekerjaan</label>
                        <input class="form-control" name="pekerjaan" id="pekerjaan" type="text" value="<?= set_value('pekerjaan'); ?>" />
                        <?= form_error('pekerjaan', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="rw_rt" class="form-control-label">RW/RT</label>
                        <div class="row">
                            <div class="col-md-3">
                                <input class="form-control" placeholder="RW" name="rw" id="rw" type="number" value="<?= set_value('rw'); ?>" />
                                <?= form_error('rw', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" placeholder="RT" name="rt" id="rt" type="number" value="<?= set_value('rt'); ?>" />
                                <?= form_error('rt', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
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