
<div class="main-content">
<div class="container-fluid padded">
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				Edit Member
                </a></li>
        </ul>
</div>
<?php
foreach($member->result() as $detail){
?>
<div class="box-content padded">
		<div class="tab-content">
                <div class="box-content" id="list">
                    <form name="form1" method="post" action="<?= base_url() ?>index.php/member/updateMemberDb" class="form-horizontal">
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label">Username</label>
                                <div class="controls">
                                    <input type="hidden" value="<?php echo $detail->id; ?>" name="id" />
                                    <input type="text" class="span3" name="username" value="<?php echo $detail->username; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="name" value="<?php echo $detail->name; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="email" value="<?php echo $detail->email; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Gender</label>
                                <div class="controls">
                                    <select name="gender">
                                    <?
                                    $listGender = $this->member_model->getGender();
                                    foreach ($listGender->result() as $row){
                                    if($detail->gender == $row->id){
                                    ?>
                                    <option value="<?php echo $row->id?>" selected=""><?php echo $row->name?></option>
                                    <?}else{?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->name?></option>    
                                    <? } }?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls" class="span2">
                                    <?
                                    if($detail->status == 'Aktif'){
                                       echo "<input type='radio' name='status' value='Aktif' checked>Aktif
                                             <input type='radio' name='status' value='Tidak Aktif'>Tidak Aktif"; 
                                    }else{
                                       echo "<input type='radio' name='status' value='Aktif'>Aktif
                                             <input type='radio' name='status' value='Tidak Aktif' checked>Tidak Aktif"; 
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Birth</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="birth" id="birth" value="<?php echo $detail->birth; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Phone</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="phone" value="<?php echo $detail->phone; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Address</label>
                                <div class="controls">
                                    <textarea class="span3" name="address" rows="5"><?php echo $detail->address; ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">City</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="city" value="<?php echo $detail->city; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Province</label>
                                <div class="controls">
                                    <select name="province">
                                    <?
                                    $listProvince = $this->member_model->getProvince();
                                    foreach ($listProvince->result() as $row){
                                    if($detail->province == $row->id){
                                    ?>
                                    <option value="<?php echo $row->id?>" selected=""><?php echo $row->name?></option>
                                    <?}else{?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->name?></option>    
                                    <? } }?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Postal Code</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="postal_code" value="<?php echo $detail->postal_code; ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Role</label>
                                <div class="controls" class="span2">
                                    <select name="role">
                                    <?
                                    $listRole = $this->member_model->getRole();
                                    foreach ($listRole->result() as $row){
                                    if($detail->role == $row->id){
                                    ?>
                                    <option value="<?php echo $row->id?>" selected=""><?php echo $row->name?></option>
                                    <?}else{?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->name?></option>    
                                    <? } }?>
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

</div></div>
<?}?>
</div></div></div>
<script>
$(function() {
$("#birth").datepicker({        
		 dateFormat: "yy-mm-dd",
         forceParse: false
    });
});

</script>