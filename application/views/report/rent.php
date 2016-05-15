<div class="main-content">
<div class="container-fluid padded">

<input type="submit" onclick="window.open('<?php echo base_URL(); ?>cetak/rent/daily', '_blank')" class="btn btn-blue" value="Print Today Report"/>&nbsp;
<input type="submit" onclick="window.open('<?php echo base_URL()?>cetak/rent/monthly', '_blank')" class="btn btn-green" value="Print Monthly Report"/>
<h4><?php echo $judul1;?></h4>
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
                    		<th><div>Member Name</div></th>
                            <th><div>Book Title</div></th>
                            <th><div>Rent Date</div></th>
                            <th><div>Due Date</div></th>
                            <th><div>Fine</div></th>
                            <th><div>Status</div></th>
						</tr>
					</thead>
                    <tbody>
    	           <?php 
            		
            			$no = 1;
            			foreach($hariini as $phi) {
            			if($phi->stat == 'K'){
            			   $color = "";
            			}else{
            			   $color = "red";
            			} 
            		?>
                   <tr>
                   <td style="text-align: center; width: 5%;"><?php echo $no;?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $phi->nama?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $phi->judul?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $phi->tgl_pinjam?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $phi->tgl_kembali?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $phi->denda?></td>
                   <td style="text-align: center; width: 30%;"><font color="<?php echo $color;?>"><?php echo getRefund($phi->stat)?></font></td>
                   </tr> 
                   <? 
                   $no++; 
                        } 
                   ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div>

<h4><?php echo $judul2;?></h4>

<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?php echo $judul2;?>
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
                    		<th><div>Member Name</div></th>
                            <th><div>Book Title</div></th>
                            <th><div>Rent Date</div></th>
                            <th><div>Due Date</div></th>
                            <th><div>Fine</div></th>
                            <th><div>Status</div></th>
						</tr>
					</thead>
                    <tbody>
    	           <?php 
            		$no2 = 1;
            			foreach($bulnini as $pbi) {
   		           
                        if($pbi->stat == 'K'){
            			   $color = "";
            			}else{
            			   $color = "red";
            			}
                   ?>
                   <tr>
                   <td style="text-align: center; width: 5%;"><?php echo $no2?></td>
                   <td><?php echo $pbi->nama?></td>
                   <td><?php echo $pbi->judul?></td>
                   <td><?php echo $pbi->tgl_pinjam?></td>
                   <td><?php echo $pbi->tgl_kembali?></td>
                   <td><?php echo $pbi->denda?></td>
                   <td><font color="<?php echo $color;?>"><?php echo getRefund($pbi->stat)?></font></td>
                   </tr> 
                   <? 
                   $no2++; 
                        } 
                   ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div>

</div></div>