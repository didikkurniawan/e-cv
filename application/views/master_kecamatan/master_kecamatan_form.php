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
        <h2 style="margin-top:0px">Master_kecamatan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kode Kecamatan <?php echo form_error('kode_kecamatan') ?></label>
            <input type="text" class="form-control" name="kode_kecamatan" id="kode_kecamatan" placeholder="Kode Kecamatan" value="<?php echo $kode_kecamatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Kecamatan <?php echo form_error('nama_kecamatan') ?></label>
            <input type="text" class="form-control" name="nama_kecamatan" id="nama_kecamatan" placeholder="Nama Kecamatan" value="<?php echo $nama_kecamatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kode Kabupaten <?php echo form_error('kode_kabupaten') ?></label>
            <input type="text" class="form-control" name="kode_kabupaten" id="kode_kabupaten" placeholder="Kode Kabupaten" value="<?php echo $kode_kabupaten; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('master_kecamatan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>