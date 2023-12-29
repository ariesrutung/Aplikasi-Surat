<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Pengelola Website</h6>
                </div>
                <?php echo form_open_multipart(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Nama</label>
                                <input class="form-control" name="name" id="name" type="text" value="<?= set_value('name'); ?>" />
                                <?= form_error('name', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username" class="form-control-label">Username</label>
                                <input class="form-control" name="username" id="username" type="text" value="<?= set_value('username'); ?>" />
                                <?= form_error('username', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input class="form-control" name="email" id="email" type="text" value="<?= set_value('email'); ?>" />
                                <?= form_error('email', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="no_hp" class="form-control-label">No. HP</label>
                                <input class="form-control" name="no_hp" id="no_hp" type="text" value="<?= set_value('no_hp'); ?>" />
                                <?= form_error('no_hp', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address" class="form-control-label">Alamat</label>
                                <input class="form-control" name="address" id="address" type="text" value="<?= set_value('address'); ?>" />
                                <?= form_error('address', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="label-control">Hak Akses</label>
                                <select class="form-control" name="level" id="level">
                                    <option disabled selected> - Pilih Hak Akses - </option>
                                    <option value="administrator">Administrator</option>
                                    <option value="pegawai">Pegawai</option>
                                </select>
                                <?= form_error('level', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password" class="form-control-label">Password</label>
                                <input class="form-control" name="password" id="password" type="password" value="<?= set_value('password'); ?>" />
                                <?= form_error('password', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password2" class="form-control-label">Konfirmasi Password</label>
                                <input class="form-control" name="password2" id="password2" type="password" value="<?= set_value('password2'); ?>" />
                                <?= form_error('password2', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gambar" class="form-control-label">Profil User</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                                <?= form_error('gambar', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
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