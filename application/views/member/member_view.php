
<div class="main-content">
<div class="container-fluid padded">
<h3><?php echo $judul;?></h3>
<a href="<?php echo base_url();?>member/addMember"><input type="submit" class="btn btn-blue" value="<?php echo $judul3;?>"/></a>&nbsp;
<a href="<?php echo base_url();?>member/printCardMember" target="_blank"><input type="submit" class="btn btn-green" value="<?php echo $judul2;?>"/></a>
<br /><br />
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?php echo $judul;?>
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
                    		<th><div>[ID] Name</div></th>
                            <th><div>Birth</div></th>
                            <th><div>Address</div></th>
                            <th><div>Status</div></th>
                            <th><div>&nbsp;</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						foreach ($data as $row) {?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo str_pad($row->id, 3, '0', STR_PAD_LEFT);?> - <?php echo $row->nama;?></td>
                            <td><?php echo $row->tmp_lahir;?>, <?php echo tgl_indo($row->tgl_lahir);?></td>
                            <td><?php echo $row->alamat;?></td>
                            <td style="text-align: center;"><?php echo getAktif($row->stat);?></td>
                            <td style="text-align: center; width: 15%;">
                            	<a href="<?php echo base_url();?>member/historyMember/<?php echo $row->id;?>"
                                	rel="tooltip" data-placement="top" data-original-title="View History" class="btn btn-gold">
      		                            <i class="icon-search"></i>
                                </a>
                                <a href="<?php echo base_url();?>index.php/member/updateMember/<?php echo $row->id;?>"
                                	rel="tooltip" data-placement="top" data-original-title="Edit" class="btn btn-blue">
                                		<i class="icon-edit"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php/member/deleteMemberDb/<?php echo $row->id;?>" onclick="return confirm('delete?')"
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