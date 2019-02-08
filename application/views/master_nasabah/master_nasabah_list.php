
            <div class="col-md-4">
                <?php echo anchor(site_url('master_nasabah/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('master_nasabah/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('master_nasabah'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr class="headings">
                <th class="column-title">No</th>
                <th class="column-title">Master Nasabah Nama</th>
                <th class="column-title">Master Nasabah Nik</th>
                <th class="column-title">Master Nasabah Alamat</th>
                <th class="column-title">Action</th>
            </tr>
        </thead>
            <?php
            foreach ($master_nasabah_data as $master_nasabah)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $master_nasabah->master_nasabah_nama ?></td>
			<td><?php echo $master_nasabah->master_nasabah_nik ?></td>
			<td><?php echo $master_nasabah->master_nasabah_alamat ?></td>
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('master_nasabah/read/'.$master_nasabah->master_nasabah_id),'Read');
				echo ' | ';
				echo anchor(site_url('master_nasabah/update/'.$master_nasabah->master_nasabah_id),'Update');
				echo ' | ';
				echo anchor(site_url('master_nasabah/delete/'.$master_nasabah->master_nasabah_id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
    </div>