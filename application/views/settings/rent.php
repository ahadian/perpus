<?php
	$idp			= $data->id;
	$denda			= $data->denda;
	$maks_buku		= $data->maks_buku;
	$maks_hari		= $data->maks_hari;
	
?>
<div class="main-content">
<div class="container-fluid padded">

<h2><?php echo $judul;?></h2>
<?php echo $this->session->flashdata("k");?><br />
<div class="box">
<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?php echo $judul;?>
                </a></li>
        </ul>
</div>
<div class="box-content padded">
		<div class="tab-content">
                <div class="box-content" id="list">
                    <form name="form1" method="post" action="<?= base_url() ?>setting_rent/save" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="idp" value="<?php echo $idp?>"/>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label">Fines Per Day</label>
                                <div class="controls">
                                    <input type="text" class="span2" name="denda" value="<?php echo $denda?>" required=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Max. Loan Book</label>
                                <div class="controls">
                                    <input type="text" class="span2" name="maks_buku" value="<?php echo $maks_buku?>" required=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Max. Day Loan</label>
                                <div class="controls">
                                    <input type="text" class="span2" name="maks_hari" value="<?php echo $maks_hari?>" required=""/>
                                </div>
                            </div>
                            
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue">Save</button>
                            
                        </div>
                   </form>                
                </div>                
			</div>

</div></div></div></div></div>
