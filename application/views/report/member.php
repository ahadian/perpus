
<div class="main-content">
<div class="container-fluid padded">
<h3><?php echo $judul1;?></h3>
<input type="submit" onclick="window.open('<?php echo base_URL(); ?>cetak/member', '_blank')" class="btn btn-blue" value="Print"/>
<br /><br />
<h5>Total : <?php echo $jml?></h5>
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?php echo $judul1;?>
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
                    		<th><div>Name</div></th>
                            <th><div>Address</div></th>
                            <th><div>Gender</div></th>
                            <th><div>Religion</div></th>
                            <th><div>Birth</div></th>
                            <th><div>Status</div></th>
                            
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						foreach ($data as $row) {?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo $row->nama;?></td>
                            <td><?php echo $row->alamat;?></td>
                            <td style="text-align: center;"><?php echo $row->jk;?></td>
                            <td><?php echo $row->agama;?></td>
                            <td><?php echo tgl_indo($row->tgl_lahir);?></td>
                            <td style="text-align: center;"><?php echo getAktif($row->stat);?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div></div></div>