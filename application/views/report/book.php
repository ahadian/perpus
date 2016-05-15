
<div class="main-content">
<div class="container-fluid padded">
<h3><?php echo $judul1;?></h3>
<input type="submit" onclick="window.open('<?php echo base_URL(); ?>cetak/book', '_blank')" class="btn btn-blue" value="Print"/>
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
                    		<th><div>Title</div></th>
                            <th><div>Author</div></th>
                            <th><div>Publisher</div></th>
                            <th><div>Publish Year</div></th>
                            <th><div>ISBN</div></th>
                            <th><div>Location</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						foreach ($data as $row) {?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo $row->judul;?></td>
                            <td><?php echo getPengarang($row->pengarang);?></td>
                            <td><?php echo getPenerbit($row->penerbit);?></td>
                            <td style="text-align: center;"><?php echo $row->th_terbit;?></td>
                            <td><?php echo $row->isbn;?></td>
                            <td><?php echo $row->nama;?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div></div></div>