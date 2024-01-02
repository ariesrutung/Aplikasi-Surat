<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Info Table</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>

<body>

    <table id="info_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Lokasi</th>
                <th>Gambar</th>
                <th>Keterangan Gambar</th>
                <th>Slug</th>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Penulis</th>
            </tr>
        </thead>
    </table>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#info_table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "<?php echo site_url('InfoController/ajax_list'); ?>",
                    "type": "POST"
                },
                "columns": [{
                        "data": "0"
                    },
                    {
                        "data": "1"
                    },
                    {
                        "data": "2"
                    },
                    {
                        "data": "3"
                    },
                    {
                        "data": "4"
                    },
                    {
                        "data": "5"
                    },
                    {
                        "data": "6"
                    },
                    {
                        "data": "7"
                    },
                    {
                        "data": "8"
                    },
                    {
                        "data": "9"
                    }
                ]
            });
        });
    </script>

</body>

</html>