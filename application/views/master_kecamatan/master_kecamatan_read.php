<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Master_kecamatan Read</h2>
        <table class="table">
	    <tr><td>Kode Kecamatan</td><td><?php echo $kode_kecamatan; ?></td></tr>
	    <tr><td>Nama Kecamatan</td><td><?php echo $nama_kecamatan; ?></td></tr>
	    <tr><td>Kode Kabupaten</td><td><?php echo $kode_kabupaten; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('master_kecamatan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>