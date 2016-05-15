	<?php 
	$instansi	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
	echo '<img src="'.base_URL().'img/'.$instansi->logo.'" style="width: 80px; height: 80px; margin-right: 20px; display: inline; float: left">';
	echo '<h2 style="font-size: 22px">'.$instansi->nama.'</h2>';
	echo '<h5>'.$instansi->alamat.'</h5>';
	
	?>
	<body onload="this.print()">
	<hr id="bulanan" style="border-width: 2px; border-color: #000">
	
	<h5>Rent <?=$title?></h5>
	
	<table style="width: 100%; font-size: 10px; border-collapse: collapse" border="1" class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="25%">Member Name</th>
			<th width="35%">Book Title</th>
			<th width="10%">Rent Date</th>
			<th width="10%">Due Date</th>
			<th width="10%">Fine</th>
			<th width="5%">Status</th>
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
			<td style="text-align: left"><?=getNama($d->id_anggota)?></td>
			<td style="text-align: left"><?=getJudul($d->id_buku)?></td>
			<td style="text-align: center"><?=$d->tgl_pinjam?></td>
			<td style="text-align: center"><?=$d->tgl_kembali?></td>
			<td style="text-align: right"><?=$d->denda?></td>
			<td style="text-align: center"><?=getRefund($d->stat)?></td>
		</tr>	
		<?php
			$no++;
			}
		}
        ?>
	</table>