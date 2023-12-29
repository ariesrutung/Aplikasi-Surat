<style>
    .alert.alert-success {
        margin: 5px 20px;
        padding: 15px;
        font-size: 14px;
        color: #fff;
    }

    .text-sm {
        white-space: normal !important;
    }

    .font-weight-normal {
        font-weight: 400 !important;
    }

    .text-sm {
        font-size: 0.875rem !important;
    }

    .text-sm {
        line-height: 1.5;
    }

    .text-secondary {
        color: #8392ab !important;
    }
</style>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Maksud dan Tujuan</h6>
                </div>
                <?php if ($this->session->flashdata('success') == TRUE) : ?>
                    <div class="alert alert-success">
                        <span><?= $this->session->flashdata('success'); ?></span>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <p class="text-secondary font-weight-normal text-sm"><?= $profil->maksud_tujuan; ?></p>
                    <a href="<?= site_url('admin/profil/edit_maksud_tujuan') ?>" class="btn bg-gradient-primary btn-sm mb-0"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit Maksud & Tujuan</a>
                </div>
            </div>
        </div>
    </div>
</div>