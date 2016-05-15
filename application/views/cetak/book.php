	<?php 
	$instansi = $this->db->query("SELECT * FROM config LIMIT 1")->row();
	echo '<img src="'.base_URL().'img/'.$instansi->logo.'" style="width: 80px; height: 80px; margin-right: 20px; display: inline; float: left">';
	echo '<h2 style="font-size: 22px">Perpustakaan '.$instansi->nama.'</h2>';
	echo '<h5>'.$instansi->alamat.'</h5>';
	
	?>
	<body onload="this.print()">
	<hr id="bulanan" style="border-width: 2px; border-color: #000">
	
	<h5>Book Report</h5>
	<table style="width: 100%; font-size: 10px; border-collapse: collapse" border="1" class="table table-condensed">
		<tr>
			<th><div>No</div></th>
            <th><div>Title</div></th>
            <th><div>Author</div></th>
            <th><div>Publisher</div></th>
            <th><div>Publish Year</div></th>
            <th><div>ISBN</div></th>
            <th><div>Location</div></th>
			
		</tr>
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='7' style='text-align: center'> - Tidak ada data - </td></tr>";
		} else {
			$no = 1;
			foreach($data as $d) {
		?>
		<tr>
			<td style="text-align: center"><?=$no?></td>
			<td style="text-align: left"><?=$d->judul?></td>
			<td style="text-align: left"><?=getPengarang($d->pengarang)?></td>
			<td style="text-align: left"><?=getPenerbit($d->penerbit)?></td>
			<td style="text-align: center"><?=$d->th_terbit?></td>
			<td style="text-align: left"><?=$d->isbn?></td>
			<td style="text-align: left"><?=getLokasi($d->id_lokasi)?></td>
			
		</tr>	
		<?php
			$no++;
			}
		}
		?>
	</table>