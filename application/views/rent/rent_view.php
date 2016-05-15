<div class="main-content">
<div class="container-fluid padded">
<h2><?php echo $title;?></h2>
<a href="<?php echo base_url();?>rent/addrent"><input type="submit" class="btn btn-blue" value="<?php echo $tombol;?>"/></a><br /><br />
<?php echo $this->session->flashdata("k");?>
<br /><br />
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?php echo $judul_tabel;?>
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
                            <th><div>Member (Book Quantity)</div></th>
                            <th><div>Rent Date</div></th>
                            <th><div>Due Date</div></th>
                            <th><div>Detail</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						$listrents = $this->rent_model->getAllrent();
                        foreach ($listrents->result() as $row) {
					    ?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo $row->nama;?> (<?php echo $row->jml_pinjam;?>) Books</td>
                            <td><?php echo tgl_indo($row->tgl_pinjam);?></td>
                            <td><?php echo tgl_indo($row->tgl_kembali);?></td>
                            <td style="text-align: center; width: 10%;">
                            	<a href="<?php echo base_url();?>index.php/rent/viewdetailrent/<?php echo $row->id_anggota;?>"
                                	rel="tooltip" data-placement="top" data-original-title="View" class="btn btn-blue">
                                		<i class="icon-search"></i>
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