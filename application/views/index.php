
<!DOCTYPE html>
<html lang="en">
<head>
	<title>.:: Selamat Datang di Perpustakaan : <?php echo $instansi->nama?> ::.</title>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
	<meta http-equiv = "cache-control" content = "max-age=0" />
	<meta http-equiv = "cache-control" content ="no-cache" />
	<meta http-equiv = "expires" content = "0" />
	<meta http-equiv = "expires" content = "Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv = "pragma" content = "no-cache" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('template/css/font.css');?>" />
	<link rel="stylesheet" href="<?php echo base_url('template/css/bayanno.css');?>" />
	<?php
	if(!empty($css_files)){
		foreach($css_files as $file): ?>
	<link rel="stylesheet" href="<?php echo $file; ?>" />
	<?php 
		endforeach; 
		} 
	?>
	<script src="<?php echo base_url('template/js/bayanno.js');?>"></script>
		
<?php
	if(!empty($js_files)){
		foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php 
		endforeach;
	}
	
?>
</head>
<body>

</body>
</html>
