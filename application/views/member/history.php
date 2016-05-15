
<div class="main-content">
<div class="container-fluid padded">
<h3><?php echo $judul;?></h3>

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
                    		<th><div>Title</div></th>
                            <th><div>Rent Date</div></th>
                            <th><div>Due Date</div></th>
                            <th><div>Status</div></th>
                            <th><div>Fine</div></th>
                            <th><div>Retard</div></th>
                    		
						</tr>
					</thead>
                    <tbody>
                    	<?php
						$i = 1;
                        foreach ($history->result() as $row) {
                        if ($row->stat == 'K'){
                            $color = "";
                        }else{
                            $color = "red";
                        }
                        ?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo getJudul($row->id_buku);?></td>
                            <td><?php echo tgl_indo($row->tgl_pinjam);?></td>
                            <td><?php echo tgl_indo($row->tgl_kembali);?></td>
                            <td style="text-align: center;"><font color="<?php echo $color;?>"><?php echo getRefund($row->stat);?></font></td>
                            <td style="text-align: center;"><?php echo $row->telat;?> Day</td>
                            <td><?php echo $row->denda;?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div><br />
            <button type="button" onclick="self.history.back()" class="btn btn-gold">Back</button>
        </div>
	</div>
</div></div></div>