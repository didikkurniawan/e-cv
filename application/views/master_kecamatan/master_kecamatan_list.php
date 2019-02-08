
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('master_kecamatan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('master_kecamatan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('master_kecamatan'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Kode Kecamatan</th>
		<th>Nama Kecamatan</th>
		<th>Kode Kabupaten</th>
		<th>Action</th>
            </tr><?php
            foreach ($master_kecamatan_data as $master_kecamatan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $master_kecamatan->kode_kecamatan ?></td>
			<td><?php echo $master_kecamatan->nama_kecamatan ?></td>
			<td><?php echo $master_kecamatan->kode_kabupaten ?></td>
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('master_kecamatan/read/'.$master_kecamatan->id),'Read');
				echo ' | ';
				echo anchor(site_url('master_kecamatan/update/'.$master_kecamatan->id),'Update');
				echo ' | ';
				echo anchor(site_url('master_kecamatan/delete/'.$master_kecamatan->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
