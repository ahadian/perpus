	<?php 
	$instansi	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
	echo '<img src="'.base_URL().'img/'.$instansi->logo.'" style="width: 80px; height: 80px; margin-right: 20px; display: inline; float: left">';
	echo '<h2 style="font-size: 22px">'.$instansi->nama.'</h2>';
	echo '<h5>'.$instansi->alamat.'</h5>';
	
	?>
	<body onload="this.print()">
	<hr id="bulanan" style="border-width: 2px; border-color: #000">
	
	<h5>Member Report</h5>
	<table style="width: 100%; font-size: 10px; border-collapse: collapse" border="1" class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="20%">Name</th>
			<th width="30%">Address</th>
			<th width="5%">Gender</th>
			<th width="7%">Religion</th>
			<th width="15%">Birth</th>
			<th width="10%">Status</th>
			
		</tr>
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='7' style='text-align: center'> - Data not found - </td></tr>";
		} else {
			$no = 1;
			foreach($data as $d) {
		?>
		<tr>
			<td style="text-align: center"><?=$no?></td>
			<td style="text-align: left"><?=$d->nama?></td>
			<td style="text-align: left"><?=$d->alamat?></td>
			<td style="text-align: center"><?=$d->jk?></td>
			<td style="text-align: center"><?=$d->agama?></td>
			<td style="text-align: left"><?=$d->tmp_lahir.", ".tgl_indo($d->tgl_lahir)?></td>
			<td style="text-align: center"><?=getAktif($d->stat)?></td>
		</tr>	
		<?php
			$no++;
			}
		}
		?>
	</table>