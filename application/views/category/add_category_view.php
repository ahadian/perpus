<?
$session_data = $this->session->userdata('logged_in');
?>
<div class="main-content">
<div class="container-fluid padded">
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				Add Book Category
                </a></li>
        </ul>
</div>
<div class="box-content padded">
		<div class="tab-content">
                <div class="box-content" id="list">
                    <form name="form1" method="post" action="<?= base_url() ?>category/addcategoryDb" class="form-horizontal">
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label">Book Category</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="nama" />
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
