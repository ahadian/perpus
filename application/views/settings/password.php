
<div class="main-content">
<div class="container-fluid padded">
<h2><?=$judul?></h2>
<?php echo $this->session->flashdata("k");?><br />
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
                    <form name="form1" method="post" action="<?= base_url() ?>change_password/save" class="form-horizontal" >
                    
                    
                        <div class="padded">
                            
                            <div class="control-group">
                                <label class="control-label">Old Password</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="p2" required=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">New Password</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="p3" required=""/>
                                </div>
                            </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue">Simpan</button>
                            
                        </div>
                   </form>                
                </div>                
			</div>

</div></div></div></div></div>
