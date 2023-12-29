<style>
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
                <div class="card-header pb-0">
                    <h6>Alur Surat Keluar</h6>
                </div>
                <?php if ($this->session->flashdata('success') == TRUE) : ?>
                    <div class="alert alert-success">
                        <span><?= $this->session->flashdata('success'); ?></span>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="text-justify"><?= $alur->alur_surat_keluar; ?></h5>
                    <a href="<?= site_url('admin/profil/edit_alur_surat_keluar') ?>" class="btn bg-gradient-primary btn-sm mb-0"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit Alur Surat Keluar</a>
                </div>
            </div>
        </div>
    </div>
</div>