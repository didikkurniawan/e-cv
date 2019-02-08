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
        <h2 style="margin-top:0px">Master_nasabah Read</h2>
        <table class="table">
	    <tr><td>Master Nasabah Nama</td><td><?php echo $master_nasabah_nama; ?></td></tr>
	    <tr><td>Master Nasabah Nik</td><td><?php echo $master_nasabah_nik; ?></td></tr>
	    <tr><td>Master Nasabah Alamat</td><td><?php echo $master_nasabah_alamat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('master_nasabah') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>