<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Ubah Alur Surat Masuk</h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('admin/profil/update_alur_surat_masuk') ?>" method="POST">
                        <div class="form-group">
                            <textarea class="form-control" id="alur_surat_masuk" name="alur_surat_masuk" style="height: 300px;"><?= $alur->alur_surat_masuk; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#alur_surat_masuk'))
        .catch(error => {
            console.error(error);
        });
</script>