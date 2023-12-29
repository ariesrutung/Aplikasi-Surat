<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<h6>Ubah Struktur Kelurahan</h6>
				</div>
				<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				<div class="card-body">
					<image class="img-fluid" src="<?= base_url('/assets/galery/');
													echo $profil[0]['s_kelurahan'] ?>" alt="struktur-LPM"></image>
					<form enctype="multipart/form-data" action="<?= base_url('galery/edit_s_kelurahan/') ?><?= $profil[0]['id'] ?>" method="post">

						<label for="s_kelurahan">Ganti Struktur Kelurahan</label>
						<input type="file" accept="image/*" name="s_kelurahan" id="s_kelurahan">
						<input type="hidden" name="s_kelurahan_old" value="<?= $profil[0]['s_kelurahan'] ?>" id="s_kelurahan">
						<button class="btn btn-primary pull-right" type="submit">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>