
<div class="navbar navbar-top navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
        
			<a class="brand" href="<?php echo base_url()?>home"><?php echo $instansi->nama?> </a>
			<ul class="nav pull-right">
				<li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>
				<li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>
			</ul>
			<div class="nav-collapse nav-collapse-top collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
					<ul class="dropdown-menu">
                    	<li class="with-image">
                        	<span>
                            <?php echo $this->session->userdata('name')?>
                            </span>
                        </li>
                    	<li class="divider"></li>
						<li><a href="<?php echo base_url()?>login/logout">
                        		<i class="icon-off"></i><span>Logout</span></a></li>
					</ul>
                	</li>
				</ul>
			</div>
           
        </div>
	</div>
</div>