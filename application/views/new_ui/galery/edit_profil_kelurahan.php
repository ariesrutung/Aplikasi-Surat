<script src="https://cdn.tiny.cloud/1/oobavaexf9hwn2l84qkgsxfxizpnbyjl1nv84oejiywk0uce/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Profil Kelurahan</h6>
                </div>
                <form action="<?= base_url('admin/galery/edit_profil/') ?><?= $profil[0]['id'] ?>" method="post">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="profil" class="form-control-label">Profil Kelurahan</label>
                            <textarea class="form-control" name="profil" id="profil"><?= $profil[0]['profile'] ?></textarea>
                            <?= form_error('profil', '<div class="text-danger text-sm">', '</div>'); ?>
                        </div>

                        <div class="category form-category">
                            <div class="form-footer text-right">
                                <button type="submit" class="btn btn-success btn-fill">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
</script>