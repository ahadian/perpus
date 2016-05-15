<div class="main-content">
<div class="container-fluid padded">
<h2><?=$judul?></h2>
<a href="<?php echo base_url();?>setting_holiday/add"><input type="submit" class="btn btn-blue" value="<?=$judul?>"/></a><br /><br />
<?php echo $this->session->flashdata("k");?><br />
<div class="box">
<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?=$judul?>
                </a></li>
        </ul>
</div>	
	<div class="box-content padded">
		<div class="tab-content">
        	<div class="tab-pane box active" id="list">
				<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div>No</div></th>
                    		<th><div>Date</div></th>
                            <th><div>Name</div></th>
                            <th><div>&nbsp;</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						foreach ($data as $row) {
					    ?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo tgl_indo($row->tanggal);?></td>
                            <td><?php echo $row->nama;?></td>
                            <td style="text-align: center; width: 10%;">
                            	<a href="<?php echo base_url();?>setting_holiday/edit/<?php echo $row->id;?>"
                                	rel="tooltip" data-placement="top" data-original-title="Edit" class="btn btn-blue">
                                		<i class="icon-edit"></i>
                                </a>
                            	<a href="<?php echo base_url();?>setting_holiday/delete/<?php echo $row->id;?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-red">
                                		<i class="icon-trash"></i>
                                </a>
        					</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div></div></div>