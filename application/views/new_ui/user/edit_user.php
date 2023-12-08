<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Pengelola Website</h6>
                </div>
                <?php echo form_open_multipart(); ?>
                <div class="card-body">

                    <div class="form-group">
                        <label for="username" class="form-control-label">Username</label>
                        <input class="form-control" name="username" id="username" type="text" value="<?= $user['username']; ?>" />
                        <?= form_error('username', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-control-label">Password</label>
                        <input class="form-control" name="password" id="password" type="password" value="<?= $user['password']; ?>" />
                        <?= form_error('password', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="password2" class="form-control-label">Konfirmasi Password</label>
                        <input class="form-control" name="password2" id="password2" type="password" value="<?= $user['password']; ?>" />
                        <?= form_error('password2', '<div class="text-danger text-sm">', '</div>'); ?>
                    </div>
                    <?php if ($this->session->userdata('level') == 'administrator') : ?>
                        <div class="form-group">
                            <label class="label-control">Hak Akses</label>
                            <select class="form-control" name="level" id="level">
                                <option disabled selected> - Pilih Hak Akses - </option>
                                <?php if ($user['level'] == 'administrator') : ?>
                                    <option selected='true' value="administrator">Administrator</option>
                                    <option value="pegawai">Pegawai</option>
                                <?php else : ?>
                                    <option value="administrator">Administrator</option>
                                    <option selected='true' value="pegawai">Pegawai</option>
                                <?php endif; ?>
                            </select>
                            <?= form_error('level', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="category form-category">
                        <div class="form-footer text-right">
                            <button type="submit" class="btn btn-success btn-fill">Simpan</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>