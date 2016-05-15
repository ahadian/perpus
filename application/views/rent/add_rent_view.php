
<div class="main-content">
<div class="container-fluid padded">
<?php echo $this->session->flashdata("k");?>
<br />
<div class="box">
<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				<?php echo $title;?>
                </a></li>
        </ul>
</div>

<div class="box-content padded">
		<div class="tab-content">
                <div class="box-content" id="list">
                    <form name="form1" onsubmit="return cek()" method="post" action="<?= base_url() ?>rent/addrentDb" class="form-horizontal">
                    
                        <div class="padded">
                            
                            <div class="control-group">
                                <label class="control-label">Member</label>
                                <div class="controls">
                                    <select name="id_anggota" required autofocus>
                                    <option value="-">Choose Member</option>
                                    <?
                                    $listMembers = $this->member_model->getMemberid();
                                    foreach ($listMembers->result() as $rows){
                                    ?>
                                    <option value="<?php echo $rows->id?>"><?php echo strtoupper($rows->nama)?></option>
                                    <?}?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Quantity</label>
                                <div class="controls">
                                    <input class="span1" type="text" name="jml_buku" required=""/> &nbsp;&nbsp;*) Maximum <?php echo $instansi->maks_buku?> Books
                                </div>
                            </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue">Next</button>
                            
                        </div>
                   </form>                
                </div>                
			</div>                
			</div>

</div></div></div></div></div>

<script type="text/javascript">
function cek() {
	var x=document.forms["form1"]["jml_buku"].value;

	if (x > <?php echo $instansi->maks_buku?>) {
	  alert("The maximum loan amount is <?php echo $instansi->maks_buku?> Books!");
	  return false;
	}
}
</script>


