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

    .text-sm {
        white-space: normal !important;
    }
</style>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex align-items-center">
                    <h5 class="mb-0 text-capitalize">Data Informasi</h5>
                    <a href="<?= base_url() ?>admin/informasi/tambah_informasi" class="btn bg-gradient-info btn-sm ms-auto mb-0"><i class="fas fa-plus me-2"></i>Tambah Data Informasi</a>
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
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 ps-2 w-25">Judul</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7 w-35">Isi</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Tanggal</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Kategori</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Gambar</th>
                                        <th class="text-capitalize text-secondary text-sm font-weight-bolder opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr>
                                            <td class="text-secondary font-weight-normal text-sm text-center"><?= $no; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['judul']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm w-25">
                                                <div class="content-wrapper">
                                                    <span class="content">
                                                        <span class="shortcontent"><?= $key['isi']; ?></span>
                                                        <span class="morecontent">
                                                            <span style="display: none;"><?= $key['isi']; ?></span>
                                                            &nbsp;&nbsp;<a href="#" class="toggle-text">Show More</a>
                                                        </span>
                                                    </span>
                                                    <span class="show-more">... <a href="#" class="toggle-text">Show More</a></span>
                                                </div>
                                            </td>

                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['tanggal']; ?></td>
                                            <td class="text-secondary font-weight-normal text-sm"><?= $key['kategori']; ?></td>
                                            <td class="text-right">
                                                <button type="button" class="btn bg-gradient-info btn-xs mb-0" data-bs-toggle="modal" data-bs-target="#lihatInformasi<?= $key['id']; ?>"><i class="fas fa-eye"></i></button>
                                                <a href="<?= base_url() ?>admin/informasi/edit_informasi/<?= $key['id']; ?>" class="btn bg-gradient-primary btn-xs mb-0"><i class="fas fa-pencil-alt"></i></a>
                                                <button type="button" class="btn bg-gradient-warning btn-xs mb-0" data-bs-toggle="modal" data-bs-target="#hapusInformasi<?= $key['id']; ?>"><i class="fas fa-trash-alt"></i></button>
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
    <div class="modal fade" id="hapusInformasi<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusInformasi<?= $key['id']; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusInformasi<?= $key['id']; ?>Label">Peringatan!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url(); ?>admin/informasi/hapus/<?= $key['id']; ?>">
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


<?php foreach ($data as $key) : ?>
    <div class="modal fade" id="lihatInformasi<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="lihatInformasi<?= $key['id']; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lihatInformasi<?= $key['id']; ?>Label">Gambar <?= $key['gambar']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="instruction">
                        <div class="row">
                            <div class="col-md-12">
                                <img width="100%" height="450px;" src="<?= base_url("uploads/informasi") ?>/<?= $key["gambar"] ?>">
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        var showChar = 100; // Jumlah karakter yang akan ditampilkan awal
        var ellipsestext = "...";
        var moretext = "Show More";
        var lesstext = "Show Less";

        $('.text-secondary .content-wrapper').each(function() {
            var content = $(this).find('.shortcontent').text();

            if (content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);

                var html = '<span class="shortcontent">' + c + '</span><span class="ellipsis">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span style="display: none;">' + h + '</span>&nbsp;&nbsp;<a href="#" class="toggle-text">' + moretext + '</a></span>';

                $(this).html(html);
            }
        });

        $(".toggle-text").click(function(e) {
            e.preventDefault();
            var parent = $(this).closest('.text-secondary .content-wrapper');
            parent.find(".morecontent span").toggle();
            parent.find(".ellipsis").toggle();
            parent.find(".toggle-text").text(parent.find(".toggle-text").text() == moretext ? lesstext : moretext);
        });
    });
</script>