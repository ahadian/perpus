<div class="main-content">
<div class="container-fluid padded">
<h4><?php echo $judul1;?></h4>
<input type="submit" onclick="window.open('<?php echo base_URL(); ?>cetak/visitor_daily', '_blank')" class="btn btn-blue" value="Print Today"/>&nbsp;
<input type="submit" onclick="window.open('<?php echo base_URL()?>report#monthly', '_self')" class="btn btn-green" value="Print Monthly Report"/>
<br /><br />
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
                    		<th><div>Man</div></th>
                            <th><div>Woman</div></th>
                            <th><div>Quantity</div></th>
						</tr>
					</thead>
                    <tbody>
    	           <?php 
   		           $c_jk_hi = $this->db->query("SELECT SUM(IF( jk =  'L', 1, 0 ) ) AS jkl, SUM( IF( jk =  'P', 1, 0 ) ) AS jkp FROM pengunjung  WHERE LEFT(tgl, 10) = DATE(NOW()) ")->result();
                   foreach($c_jk_hi as $cjkh) { 
                   $total =  $cjkh->jkl + $cjkh->jkp;
                   ?>
                   <tr>
                   <td style="text-align: center; width: 5%;">1</td>
                   <td style="text-align: center; width: 30%;"><?php echo $cjkh->jkl?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $cjkh->jkp?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $total?> Persons</td>
                   </tr> 
                   <? } ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div>

<h4><?php echo $judul2;?></h4>
<br />
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
                    		<th><div>Read a Book</div></th>
                            <th><div>Rent a Book</div></th>
                            <th><div>Refund a Book</div></th>
                            <th><div>Other</div></th>
						</tr>
					</thead>
                    <tbody>
    	           <?php 
            		$p1	= $this->db->query("SELECT id FROM pengunjung  WHERE perlu LIKE '%Baca Buku%' AND LEFT(tgl, 10) = DATE(NOW()) ")->num_rows();
            		$p2	= $this->db->query("SELECT id FROM pengunjung  WHERE perlu LIKE '%Pinjam Buku%' AND LEFT(tgl, 10) = DATE(NOW()) ")->num_rows();
            		$p3	= $this->db->query("SELECT id FROM pengunjung  WHERE perlu LIKE '%Kembalikan Buku%' AND LEFT(tgl, 10) = DATE(NOW()) ")->num_rows();
            		$p4	= $this->db->query("SELECT id FROM pengunjung  WHERE perlu LIKE '%Lainnya%' AND LEFT(tgl, 10) = DATE(NOW()) ")->num_rows();
            
            		?>
                   <tr>
                   <td style="text-align: center; width: 5%;">1</td>
                   <td style="text-align: center; width: 20%;"><?php echo $p1?></td>
                   <td style="text-align: center; width: 20%;"><?php echo $p2?></td>
                   <td style="text-align: center; width: 20%;"><?php echo $p3?></td>
                   <td style="text-align: center; width: 20%;"><?php echo $p4?></td>
                   </tr> 
                   
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div>

<hr id="monthly" style="border-width: 3px; border-color: #000"/>
<h4><?php echo $judul3;?></h4>
<input type="submit" onclick="window.open('<?php echo base_URL(); ?>cetak/visitor_monthly/<?php echo date('m')?>', '_blank')" class="btn btn-blue" value="Cetak Bulan  Ini"/>&nbsp;
<div class="btn-group">
		<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="<?php echo base_URL()?>cetak/visitor_monthly/<?php echo date('m')?>">Cetak Bulan  <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/1" target="_blank">Januari</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/2" target="_blank">Februari</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/3" target="_blank">Maret</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/4" target="_blank">April</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/5" target="_blank">Mei</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/6" target="_blank">Juni</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/7" target="_blank">Juli</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/8" target="_blank">Agustus</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/9" target="_blank">September</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/10" target="_blank">Oktober</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/11" target="_blank">November</a></li>
			<li><a href="<?php echo base_URL()?>cetak/visitor_monthly/12" target="_blank">Desember</a></li>
		</ul>
</div>
<br /><br />
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?php echo $judul3;?>
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
                    		<th><div>Man</div></th>
                            <th><div>Woman</div></th>
                            <th><div>Quantity</div></th>
						</tr>
					</thead>
                    <tbody>
    	           <?php 
   		           $c_jk_hi = $this->db->query("SELECT SUM(IF( jk =  'L', 1, 0 ) ) AS jkl, SUM( IF( jk =  'P', 1, 0 ) ) AS jkp FROM pengunjung  WHERE MID(tgl, 6, 2) = MONTH(NOW()) ")->result();
                   foreach($c_jk_hi as $cjkh) { 
                   $total =  $cjkh->jkl + $cjkh->jkp;
                   ?>
                   <tr>
                   <td style="text-align: center; width: 5%;">1</td>
                   <td style="text-align: center; width: 30%;"><?php echo $cjkh->jkl?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $cjkh->jkp?></td>
                   <td style="text-align: center; width: 30%;"><?php echo $total?> Persons</td>
                   </tr> 
                   <? } ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div>

<br />

<h4><?php echo $judul4;?></h4>
<br />
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?php echo $judul4;?>
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
                    		<th><div>Read a Book</div></th>
                            <th><div>Rent a Book</div></th>
                            <th><div>Refund a Book</div></th>
                            <th><div>Other</div></th>
						</tr>
					</thead>
                    <tbody>
    	           <?php 
            		$p1	= $this->db->query("SELECT id FROM pengunjung  WHERE perlu LIKE '%Baca Buku%' AND MID(tgl, 6, 2) = MONTH(NOW()) ")->num_rows();
            		$p2	= $this->db->query("SELECT id FROM pengunjung  WHERE perlu LIKE '%Pinjam Buku%' AND MID(tgl, 6, 2) = MONTH(NOW()) ")->num_rows();
            		$p3	= $this->db->query("SELECT id FROM pengunjung  WHERE perlu LIKE '%Kembalikan Buku%' AND MID(tgl, 6, 2) = MONTH(NOW()) ")->num_rows();
            		$p4	= $this->db->query("SELECT id FROM pengunjung  WHERE perlu LIKE '%Lainnya%' AND MID(tgl, 6, 2) = MONTH(NOW()) ")->num_rows();
            
            		?>
                   <tr>
                   <td style="text-align: center; width: 5%;">1</td>
                   <td style="text-align: center; width: 20%;"><?php echo $p1?></td>
                   <td style="text-align: center; width: 20%;"><?php echo $p2?></td>
                   <td style="text-align: center; width: 20%;"><?php echo $p3?></td>
                   <td style="text-align: center; width: 20%;"><?php echo $p4?></td>
                   </tr> 
                   
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div>

</div></div>