<style>
    .text-center {
        text-align: center;
    }

    .text-left {
        text-align: left;
    }

    .table thead th {
        padding: 0.5rem 0.5rem;
        text-transform: capitalize;
        letter-spacing: 0px;
        border-bottom: 1px solid #e9ecef;
    }

    .alert.alert-success {
        margin: 5px 20px;
        padding: 15px;
        font-size: 14px;
        color: #fff;
    }

    .table tbody td {
        white-space: normal;
    }

    .table.align-items-center td,
    .table.align-items-center th {
        vertical-align: top;
    }
</style>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex align-items-center">
                    <h5 class="mb-0 text-capitalize">Data Tata Kerja</h5>
                    <a href="<?= base_url() ?>admin/tatakerja/tambah" class="btn bg-gradient-info btn-sm ms-auto mb-0"><i class="fas fa-plus me-2"></i>Tambah Data</a>
                </div>
                <?php if ($this->session->flashdata('success') == TRUE) : ?>
                    <div class="alert alert-success">
                        <span><?= $this->session->flashdata('success'); ?></span>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr class="w-100">
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 w-5">No.</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 ps-2 w-10">Nama Lengkap</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 w-10">Jabatan</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 w-20 ">Tugas</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 w-40">Fungsi</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 w-15 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php foreach ($tatakerja as $key) : ?>
                                        <tr>
                                            <td class="text-secondary font-weight-normal text-sm w-5 text-center"><?= $no; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm w-10"><?= $key['nama_lengkap']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm w-10"><?= $key['jabatan']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm w-20 "><?= $key['tugas']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm w-40"><?= $key['fungsi']; ?></td>
                                            <td class="text-center w-15">
                                                <button type="button" class="btn bg-gradient-info btn-xs mb-0" data-bs-toggle="modal" data-bs-target="#lihatFoto<?= $key['id']; ?>"><i class="fas fa-eye"></i></button>
                                                <a href="<?= base_url() ?>admin/tatakerja/edit/<?= $key['id']; ?>" class="btn bg-gradient-primary btn-xs mb-0"><i class="fas fa-pencil-alt"></i></a>
                                                <button type="button" class="btn bg-gradient-warning btn-xs mb-0" data-bs-toggle="modal" data-bs-target="#hapusTatakerja<?= $key['id']; ?>"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<?php foreach ($tatakerja as $key) : ?>
    <div class="modal fade" id="hapusTatakerja<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusTatakerja<?= $key['id']; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusTatakerja<?= $key['id']; ?>Label">Peringatan!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url(); ?>admin/tatakerja/hapus/<?= $key['id']; ?>">
                    <div class="modal-body">
                        <p>Apakah anda yakin untuk menghapus data penduduk ini? </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn bg-gradient-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<?php foreach ($tatakerja as $key) : ?>
    <div class="modal fade" id="lihatFoto<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="lihatFoto<?= $key['id']; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lihatFoto<?= $key['id']; ?>Label">Foto Aparat Desa <?= $key['nama_lengkap']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="instruction">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if (!empty($key['gambar'])) : ?>
                                    <img class="w-100" src="<?= base_url('/uploads/aparatdesa/' . $key['gambar']); ?>" alt="Profil Pengguna">
                                <?php else : ?>
                                    <img class="w-100" src="<?= base_url('/assets/img/default-avatar.png') ?>" alt="Profil Pengguna Default">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>