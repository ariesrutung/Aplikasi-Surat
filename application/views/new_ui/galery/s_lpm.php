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
				<div class="card-header pb-0 d-flex align-items-center justify-content-between">
					<h6>Profil Ketua LPM</h6>
					<a href="<?= base_url('admin/galery/edit_s_lpm/') ?><?= $profil[0]['id'] ?>" class="btn bg-gradient-primary btn-xs mb-0">Ubah LPM</a>
				</div>
				<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				<div class="card-body">
					<image class="img-fluid" src="<?= base_url('/assets/galery/');
													echo $profil[0]['s_lpm'] ?>" alt="struktur-LPM"></image>

				</div>
			</div>
		</div>
	</div>
</div>