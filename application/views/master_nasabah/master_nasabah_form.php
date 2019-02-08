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
        <h2 style="margin-top:0px">Master_nasabah <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Master Nasabah Nama <?php echo form_error('master_nasabah_nama') ?></label>
            <input type="text" class="form-control" name="master_nasabah_nama" id="master_nasabah_nama" placeholder="Master Nasabah Nama" value="<?php echo $master_nasabah_nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Master Nasabah Nik <?php echo form_error('master_nasabah_nik') ?></label>
            <input type="text" class="form-control" name="master_nasabah_nik" id="master_nasabah_nik" placeholder="Master Nasabah Nik" value="<?php echo $master_nasabah_nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="master_nasabah_alamat">Master Nasabah Alamat <?php echo form_error('master_nasabah_alamat') ?></label>
            <textarea class="form-control" rows="3" name="master_nasabah_alamat" id="master_nasabah_alamat" placeholder="Master Nasabah Alamat"><?php echo $master_nasabah_alamat; ?></textarea>
        </div>
	    <input type="hidden" name="master_nasabah_id" value="<?php echo $master_nasabah_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('master_nasabah') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>