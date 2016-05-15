
<div class="main-content">
<div class="container-fluid padded">

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
                <?php echo $this->session->flashdata("k");?>
                <div class="box-content" id="list">
                    <form name="form1" method="post" action="<?= base_url() ?>index.php/member/addMemberDb" class="form-horizontal">
                        <input type="hidden" name="tgl_daftar" value="<?php echo date('Y-m-d');?>">
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="nama" required=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Address</label>
                                <div class="controls">
                                    <textarea class="span3" name="alamat" rows="5" required=""></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Gender</label>
                                <div class="controls">
                                    <select name="jk" class="span2">
                                    <?
                                    $listGender = $this->member_model->getGender();
                                    foreach ($listGender->result() as $row){
                                    ?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
                                    <?}?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Religion</label>
                                <div class="controls" class="span2">
                                    <select name="agama" class="span2">
                                    <option value="">[Choose Religion]</option>
                                    <?
                                    $listReligion = $this->member_model->getReligion();
                                    foreach ($listReligion->result() as $row){
                                    ?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->agama?></option>
                                    <?}?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Place / Birth</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="tmp_lahir" required=""/>&nbsp; /
                                    <input type="text" class="span2" name="tgl_lahir" id="birth"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <select name="status">
                                    <option value="1">Active</option>
                                    <option value="2">Non Active</option>
                                    </select>
                                </div>
                            </div>
                            
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue">Simpan</button>
                            <button type="button" onclick="self.history.back()" class="btn btn-default">Cancel</button>
                        </div>
                   </form>                
                </div>                
			</div>

</div></div></div></div></div>
<script>
$(function() {
$("#birth").datepicker({        
		 dateFormat: "yy-mm-dd",
         forceParse: false
    });
});

</script>