
<div class="main-content">
<div class="container-fluid padded">
<h3><?php echo $judul1;?></h3>
<input type="submit" onclick="window.open('<?php echo base_URL(); ?>cetak/member', '_blank')" class="btn btn-blue" value="Print"/>
<br /><br />

<legend>10 Most Books</legend>
<div class="box">
<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				10 Most Books
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
                    		<th><div>Book Title</div></th>
                            <th><div>Rent Quantity</div></th>
                        </tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						foreach ($buku_paling_banyak_dipinjam as $row) {?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo $row->judul;?></td>
                            <td><?php echo $row->jumlah_pinjam;?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div><br />

<legend>10 Most Members</legend>
<div class="box">
<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				10 Most Members
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
                            <th><div>Rent Quantity</div></th>
                        </tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						foreach ($anggota_paling_banyak_meminjam as $row) {?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo $row->nama;?></td>
                            <td><?php echo $row->jumlah_pinjam;?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div>
</div></div>