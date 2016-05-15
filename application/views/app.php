
<!DOCTYPE html>
<html lang="en">
<head>
	<title>.:: Welcome to <?php echo $instansi->nama?> ::.</title>
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
    


    	
<div class="navbar navbar-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
        
			<a class="brand" href="<?php echo base_URL()?>"><?php echo $instansi->nama?> </a>
			<ul class="nav pull-right">
				<li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>
				<li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>
			</ul>
            <div class="nav-collapse nav-collapse-top collapse">
				<ul class="nav pull-right">
					<li>
					<a href="<?php echo base_URL()?>beranda">Home</a>
					</li>
				</ul>
			</div>
            <div class="nav-collapse nav-collapse-top collapse">
				<ul class="nav pull-right">
					<li>
					<a href="<?php echo base_URL()?>beranda/profil">Profile</a>
					</li>
				</ul>
			</div>
            
            <div class="nav-collapse nav-collapse-top collapse">
				<ul class="nav pull-right">
					<li>
					<a href="<?php echo base_URL()?>login" target="_blank"> Admin Login</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</head>
<body>
<div class="main-content">
<div class="container">
<div class="container-fluid padded">
	<div class="row-fluid">
        <div class="span12">
        <?php echo $this->load->view($page)?>
        </div>
        <div class="row-fluid">
        	<div class="span12">
        		&nbsp;
        	</div>
        </div>
        
        </div>
 </div>

</div></div>	    

<div>
<div><center><strong>Copyright <?php echo date('Y');?>&nbsp;<?php echo $instansi->nama?></strong></div>
</div>
</body>
</html>
