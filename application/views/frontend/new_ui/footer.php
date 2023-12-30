</main>
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <!-- <h3>Presento<span>.</span></h3> -->
                    <a href="<?= base_url('/'); ?>admin/home" class="logo me-auto footer-logo"><img class="w-75 rounded bg-light p-2" src="<?= base_url(); ?>assets/frontend/assets/img/logo.png" alt=""></a>
                    <p>
                        Jln. Kebun Cengkeh<br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +6289 55488 55<br>
                        <strong>Email:</strong> info@newslab.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Link Informasi</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>frontend/profil">Profil</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>frontend/struktur">Struktur Organisasi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>frontend/informasi/berita">Berita</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>frontend/informasi/pengumuman">Pengumuman</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Link Layanan</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>admin/suratonline">Pengajuan Surat</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('/'); ?>admin/tracking">Tracking Surat</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Link Social Media</h4>
                    <div class="social-links text-left text-md-end pt-3 pt-md-0">
                        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://facebook.com/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://instagram.com/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://skype.com/" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="https://linkedin.com/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>e-Surat</span></strong>. All Rights Reserved
            </div>
        </div>
        <!-- <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> -->
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url(); ?>assets/frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url(); ?>assets/frontend/assets/vendor/aos/aos.js"></script>
<script src="<?= base_url(); ?>assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url(); ?>assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/frontend/assets/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="<?= base_url(); ?>assets/frontend/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#nik').autocomplete({
            source: "<?php echo site_url('Penduduk/get_autocomplete'); ?>",

            select: function(event, ui) {
                console.log(ui.item)
                $('[name="nik"]').val(ui.item.label);
                $('[name="nama"]').val(ui.item.nama);
                $('[name="no_hp"]').val(ui.item.no_hp);
            },
            response: function(event, ui) {
                if (ui.content.length === 0) {
                    console.log('No results loaded!');
                } else {
                    console.log('success!');
                }
            },
        });

    });

    $('#jenis').change(function() {
        var e = document.getElementById("jenis");
        var jenisSurat = e.value;
        // console.log(jenisSurat)

        const spkk = ['KK Lama (Asli & FC)', 'KTP', 'Surat Pindah dari daerah asal', 'FC Buku Nikah', 'Surat Pengantar/Keterangan RT & RW']
        const spna = ['FC KK Calon Suami & Istri', 'FC KTP Calon Suami & Istri', 'Pas Foto 3x4 Calon Suami & Istri', 'Surat Pengantar/Keterangan RT & RW', 'FC Akta Cerai (Bagi Janda/Duda)']
        const skkl = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kelahiran dari Bidan/RS (Jika ada/ Optional)', 'Surat Pengantar/Keterangan RT & RW']
        const skkm = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kematian (Jika ada/Optional)', 'Surat Pengantar/Keterangan RT & RW']
        const skp = ['KK (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Data alamat daerah tujuan']
        const skd = ['KK (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Data alamat daerah asal']
        const skbm = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
        const skph = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pernyataan dari yang bersangkutan(Optional)', 'Surat Pengantar/Keterangan RT & RW']
        const skm = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
        const sku = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Izin Usaha', 'Surat Pengantar/Keterangan RT & RW']
        const skt = ['KTP (Asli & FC)', 'Surat Dasar Kepemilikan']
        const skgg = ['KTP (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
        const situ = ['KTP (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
        const simb = ['KTP (Asli & FC)', 'FC Surat Tanah Lokasi Bangunan', 'Surat Pengantar/Keterangan RT & RW']

        const showList = (surat) => {
            surat.forEach(item => {
                $('#syarat_dok').append(
                    `
                            <ul>
                                <li>${item}</li>
                            </ul>
                            `
                )
            });
        }

        if (jenisSurat == 'SPKK') {
            $('#syarat_dok').html('')
            showList(spkk)
        } else if (jenisSurat == 'SPNA') {
            $('#syarat_dok').html('')
            showList(spna)
        } else if (jenisSurat == 'SKKL') {
            $('#syarat_dok').html('')
            showList(skkl)
        } else if (jenisSurat == 'SKKM') {
            $('#syarat_dok').html('')
            showList(skkm)
        } else if (jenisSurat == 'SKP') {
            $('#syarat_dok').html('')
            showList(skp)
        } else if (jenisSurat == 'SKD') {
            $('#syarat_dok').html('')
            showList(skd)
        } else if (jenisSurat == 'SKBM') {
            $('#syarat_dok').html('')
            showList(skbm)
        } else if (jenisSurat == 'SKPH') {
            $('#syarat_dok').html('')
            showList(skph)
        } else if (jenisSurat == 'SKM') {
            $('#syarat_dok').html('')
            showList(skm)
        } else if (jenisSurat == 'SKU') {
            $('#syarat_dok').html('')
            showList(sku)
        } else if (jenisSurat == 'SKT') {
            $('#syarat_dok').html('')
            showList(skt)
        } else if (jenisSurat == 'SKGG') {
            $('#syarat_dok').html('')
            showList(skgg)
        } else if (jenisSurat == 'SITU') {
            $('#syarat_dok').html('')
            showList(situ)
        } else if (jenisSurat == 'SIMB') {
            $('#syarat_dok').html('')
            showList(simb)
        } else {
            console.log('Nothing')
        }
    })
</script>
</body>

</html>