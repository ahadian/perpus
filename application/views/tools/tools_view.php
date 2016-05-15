<div class="main-content">
<div class="container-fluid padded">
<h3>Backup Database</h3>

<p>Klik pada tombol "Backup" disamping untuk memulai proses Backup &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_URL()?>tools/backup" class="btn btn-success">Backup</a></p>
<br/><br/>

<h3>Restore Database</h3>

<form action="<?php echo base_URL()?>tools/restore" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
	
	<label style="width: 150px; float: left">File Backup</label><input class="span4" type="file" name="file_backup" required=""/><br/><br />
	<button type="submit" class="btn btn-primary" onclick="return confirm('Are You Sure..? Be Careful, All Data Will Be Erased!');">Restore</button>
</form>
</div></div>