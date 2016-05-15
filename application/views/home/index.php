
<!DOCTYPE html>
<html lang="en">
<head>
	<title>.:: Welcome to <?php echo $instansi->nama;?> ::.</title>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
	<meta http-equiv = "cache-control" content = "max-age=0" />
	<meta http-equiv = "cache-control" content ="no-cache" />
	<meta http-equiv = "expires" content = "0" />
	<meta http-equiv = "expires" content = "Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv = "pragma" content = "no-cache" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="<?php echo base_url('template/css/font.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('template/css/bayanno.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('template/css/jquery-ui.css');?>"/>
	<link href="<?php echo base_url('template/css/jquery.autocomplete.css');?>" rel='stylesheet' />
    
	<script src="<?php echo base_url('template/js/bayanno.js');?>"></script>
	<script src="<?php echo base_url('template/js/jquery.ui.datepicker.js');?>"></script>
	<script src="<?php echo base_url('template/js/jquery.ui.datepicker-id.js');?>"></script>
    <script src="<?php echo base_url('template/js/ckeditor/ckeditor.js')?>"></script>
    

<?php
	if(!empty($js_files)){
		foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php 
		endforeach;
	}
	?>
    	
<?php 
$data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
$this->load->view('home/header',$data);?>
</head>
<body>
<? 
$data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
$this->load->view('home/navigation', $data); ?>	    
</body>
</html>
