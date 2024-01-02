<link rel="stylesheet" href="https://appsrv1-147a1.kxcdn.com/argon-dashboard-pro/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

<!-- Optional JS -->
<script src="https://appsrv1-147a1.kxcdn.com/argon-dashboard-pro/vendor/jquery/dist/jquery.min.js"></script>
<script src="https://appsrv1-147a1.kxcdn.com/argon-dashboard-pro/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://appsrv1-147a1.kxcdn.com/argon-dashboard-pro/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://appsrv1-147a1.kxcdn.com/argon-dashboard-pro/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://appsrv1-147a1.kxcdn.com/argon-dashboard-pro/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>

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

    div#tbl_penduduk_info {
        color: #8392ab;
        font-size: .875rem;
    }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination li {
        margin: 0 4px;
    }

    .page-item .page-link,
    .page-item span {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #8392ab;
        padding: 0;
        margin: 0 3px;
        border-radius: 50% !important;
        width: 100% !important;
        height: 36px;
        font-size: 0.875rem;
        border-radius: 10px !important;
        margin: 0 10px !important;
    }

    .text-center {
        text-align: center;
    }

    .page-item.active .page-link {
        color: #fff !important;
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

    .text-sm {
        white-space: normal !important;
    }

    .table .thead-light th {
        color: #8898aa;
        background-color: #f6f9fc;
    }

    .table .thead-light th {
        color: #8898aa;
        border-color: #e9ecef;
        background-color: #f6f9fc;
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
                            <table id="tbl_penduduk" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">No.</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 ps-2">Nama Lengkap</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">NIK</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">No. HP</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Tempat Lahir</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Tanggal Lahir</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Alamat</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Pekerjaan</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">RT/RW</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 text-center">Aksi</th>
                                    </tr>
                                </thead>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#tbl_penduduk').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('admin/penduduk/ajax_list'); ?>",
                "type": "POST"
            },
            "columns": [{
                    "data": "0",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm w-5 text-center">' + data + '</span>';
                    }
                },
                {
                    "data": "1",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm w-25">' + data + '</span>';
                    }
                },
                {
                    "data": "2",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm w-50">' + data + '</span>';
                    }
                },

                {
                    "data": "3",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm">' + data + '</span>';
                    }
                },
                {
                    "data": "4",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm">' + data + '</span>';
                    }
                },
                {
                    "data": "5",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm">' + data + '</span>';
                    }
                },
                {
                    "data": "6",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm">' + data + '</span>';
                    }
                },
                {
                    "data": "7",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm">' + data + '</span>';
                    }
                },
                {
                    "data": "8",
                    "render": function(data) {
                        return '<span class="text-secondary font-weight-normal text-sm">' + data + '</span>';
                    }
                },
                {
                    "data": "9",
                    "render": function(data, type, row) {
                        return data;
                    }
                },
            ],
            "createdRow": function(row, data, dataIndex) {
                $('th', row).addClass('text-capitalize text-secondary text-sm font-weight-bolder opacity-7');
            }
        });
    });
</script>