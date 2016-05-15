
<div class="main-content">
<div class="container-fluid padded">
<a href="<?php echo base_url();?>book/addBook"><input type="submit" class="btn btn-blue" value="Add Book"/></a><br /><br />
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				List Book
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
                    		<th><div>Title/Author/Publisher</div></th>
                            <th><div>Publish Year</div></th>
                            <th><div>Location</div></th>
                            <th><div>Description</div></th>
                    		<th><div>&nbsp;</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						foreach ($data as $row) {?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td style="width: 35%;"><?php echo $row->judul;?><br><b><?php echo getPengarang($row->pengarang);?></b><br><i><?php echo getPenerbit($row->penerbit);?></i></td>
                            <td style="text-align: center;"><?php echo $row->th_terbit;?></td>
                            <td style="text-align: center;"><?php echo getLokasi($row->id_lokasi);?></td>
                            <td style="width: 30%;"><?php echo $row->deskripsi;?></td>
                            <td style="text-align: center; width: 10%;">
                            	<a href="<?php echo base_url();?>index.php/book/updatebook/<?php echo $row->id;?>"
                                	rel="tooltip" data-placement="top" data-original-title="Edit" class="btn btn-blue">
                                		<i class="icon-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php/book/deletebookDb/<?php echo $row->id;?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="Delete" class="btn btn-red">
                                		<i class="icon-trash"></i>
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