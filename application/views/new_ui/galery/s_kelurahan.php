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
					<h6>Struktur Kelurahan</h6>
					<a href="<?= base_url('galery/edit_s_kelurahan/') ?><?= $profil[0]['id'] ?>" class="btn bg-gradient-primary btn-xs mb-0">Ubah Struktur Kelurahan</a>
				</div>
				<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				<div class="card-body">
					<image class="img-fluid" src="<?= base_url('/assets/galery/');
													echo $profil[0]['s_kelurahan'] ?>" alt="struktur-LPM"></image>

				</div>
			</div>
		</div>
	</div>
</div>