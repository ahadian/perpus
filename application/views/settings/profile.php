<?php
	$idp			= $data->id;
	$nama			= $data->nama;
	$alamat			= $data->alamat;
	$logo			= $data->logo;
	$pimpinan		= $data->pimpinan;
	$pimpinan_nip	= $data->pimpinan_nip;
	$petugas		= $data->petugas;
	$petugas_nip	= $data->petugas_nip;
	$profil			= $data->profil;
	
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
                    <form name="form1" method="post" action="<?= base_url() ?>profile/save" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="idp" value="<?php echo $idp?>"/>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label">Company Name</label>
                                <div class="controls">
                                    <input type="text" class="span4" name="nama" value="<?php echo $nama?>" required=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Address</label>
                                <div class="controls">
                                    <textarea class="span3" name="alamat" rows="5" required=""><?php echo $alamat?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Logo</label>
                                <div class="controls">
                                    <img src="<?= base_url() ?>img/<?=$logo?>" style="width: 80px; height: 80px; margin-right: 20px; display: inline; float: left"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Company Logo</label>
                                <div class="controls">
                                    <input type="file" class="span3" name="logo"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Owner</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="pimpinan" value="<?php echo $pimpinan?>" required=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Owner NIP</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="pimpinan_nip" value="<?php echo $pimpinan_nip?>" required=""/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Company Profile</label>
                                <div class="controls">
                                    <textarea class="ckeditor" name="profil" rows="5"><?php echo $profil?></textarea>
                                </div>
                            </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue">Simpan</button>
                            
                        </div>
                   </form>                
                </div>                
			</div>

</div></div></div></div></div>
