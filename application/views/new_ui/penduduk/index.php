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
</style>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex align-items-center">
                    <h5 class="mb-0 text-capitalize">Data Penduduk</h5>
                    <a href="<?= base_url() ?>admin/penduduk/tambah_data_penduduk" class="btn bg-gradient-info btn-sm ms-auto mb-0"><i class="fas fa-plus me-2"></i>Tambah Data Penduduk</a>
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
                                    <tr>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">No.</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 ps-2">Nama Lengkap</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">NIK</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Tempat Lahir</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Tanggal Lahir</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Alamat</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Pekerjaan</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">RT/RW</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">No. HP</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr>
                                            <td class="text-secondary font-weight-normal text-sm text-center"><?= $no; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['nama']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['nik']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['tmpt_lhr']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['tgl_lhr']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['alamat']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['pekerjaan']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['rw'] . '/' . $key['rt']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['no_hp']; ?></td>
                                            <td class="text-right">
                                                <a href="<?= base_url() ?>admin/penduduk/edit_data_penduduk/<?= $key['nik']; ?>" class="btn bg-gradient-primary btn-xs mb-0"><i class="fas fa-pencil-alt"></i></a>
                                                <button type="button" class="btn bg-gradient-warning btn-xs mb-0    " data-bs-toggle="modal" data-bs-target="#hapusPenduduk<?= $key['nik']; ?>"><i class="fas fa-trash-alt"></i></button>

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
<?php foreach ($data as $key) : ?>
    <div class="modal fade" id="hapusPenduduk<?= $key['nik']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusPenduduk<?= $key['nik']; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusPenduduk<?= $key['nik']; ?>Label">Peringatan!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url(); ?>admin/penduduk/hapus/<?= $key['nik']; ?>">
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