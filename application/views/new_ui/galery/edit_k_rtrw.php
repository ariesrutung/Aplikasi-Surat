<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<h6>Ubah Profil Ketua RT/RW</h6>
				</div>
				<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				<div class="card-body">
					<img class="img-fluid" src="<?= base_url('/assets/galery/');
												echo $profil[0]['k_rtrw'] ?>" alt="Ketua RT & RW">
					<form enctype="multipart/form-data" action="<?= base_url('admin/galery/edit_k_rtrw/') ?><?= $profil[0]['id'] ?>" method="post">
						<label for="k_rtrw">Ganti Ketua RT & RW</label>
						<input type="file" accept="image/*" name="k_rtrw" id="k_rtrw">
						<input type="hidden" name="k_rtrw_old" value="<?= $profil[0]['k_rtrw'] ?>" id="k_rtrw">
						<button class="btn btn-primary pull-right" type="submit">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>