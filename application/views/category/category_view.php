<div class="main-content">
<div class="container-fluid padded">
<a href="<?php echo base_url();?>category/addcategory"><input type="submit" class="btn btn-blue" value="Add Book Category"/></a><br /><br />
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				List Book Category
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
                    		<th><div>Book Category</div></th>
                            <th><div>&nbsp;</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						foreach ($listcategory->result() as $row) {
					    ?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo $row->nama;?></td>
                            <td style="text-align: center; width: 10%;">
                            	<a href="<?php echo base_url();?>index.php/category/updatecategory/<?php echo $row->id;?>"
                                	rel="tooltip" data-placement="top" data-original-title="Edit" class="btn btn-blue">
                                		<i class="icon-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php/category/deletecategoryDb/<?php echo $row->id;?>" onclick="return confirm('delete?')"
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