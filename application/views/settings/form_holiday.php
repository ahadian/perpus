<?php
$mode	= $this->uri->segment(2);

if ($mode == "edit" || $mode == "update") {
	$act		= "update";
	$idp		= $options->id;
	$tanggal	= $options->tanggal;
	$nama		= $options->nama;
	
} else {
	$act		= "save";
	$idp		= "";
	$tanggal	= "";
	$nama		= "";
}
?>
<div class="main-content">
<div class="container-fluid padded">

<div class="box">
<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?=$judul?>
                </a></li>
        </ul>
</div>
<div class="box-content padded">
		<div class="tab-content">
                <div class="box-content" id="list">
                    <form name="form1" method="post" action="<?= base_url() ?>setting_holiday/<?php echo $act?>" class="form-horizontal">
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label">Date</label>
                                <div class="controls">
                                    <input type="hidden" name="idp" value="<?php echo $idp?>"/>
                                    <input type="text" class="span2" name="tanggal" id="tanggal" value="<?php echo $tanggal?>" required/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
                                    <input type="text" class="span4" name="nama" value="<?php echo $nama?>" required/>
                                </div>
                            </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue">Save</button>
                            <button type="button" onclick="self.history.back()" class="btn btn-default">Cancel</button>
                        </div>
                   </form>                
                </div>                
			</div>

</div></div></div></div></div>
<script>
$(function() {
$("#tanggal").datepicker({        
		 dateFormat: "yy-mm-dd",
         forceParse: false
    });
});

</script>