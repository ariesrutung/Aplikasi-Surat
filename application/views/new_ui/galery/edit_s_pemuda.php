<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<h6>Ubah Profil Ketua LPM</h6>
				</div>
				<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				<div class="card-body">
					<image class="img-fluid" src="<?= base_url('/assets/galery/');
													echo $profil[0]['s_pemuda'] ?>" alt="struktur-LPM"></image>
					<form enctype="multipart/form-data" action="<?= base_url('admin/galery/edit_s_pemuda/') ?><?= $profil[0]['id'] ?>" method="post">

						<label for="s_pemuda">Ganti Struktur Pemuda Kelurahan</label>
						<input type="file" accept="image/*" name="s_pemuda" id="s_pemuda">
						<input type="hidden" name="s_pemuda_old" value="<?= $profil[0]['s_pemuda'] ?>" id="s_pemuda">
						<button class="btn btn-primary pull-right" type="submit">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>