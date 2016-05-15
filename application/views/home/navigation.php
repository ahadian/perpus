
<div class="sidebar-background">
	<div class="primary-sidebar-background">
	</div>
</div>
<div class="primary-sidebar">
	<!-- Main nav -->
    <br />
    <div style="text-align:center;">
    	<a href="<?php echo base_url();?>home">
        	<img src="<?php echo base_url();?>img/<?php echo $instansi->logo?>"  style="max-height:100px; max-width:100px;"/>
        </a>
    </div>
   	<br />
	<ul class="nav nav-collapse collapse nav-collapse-primary">
    
        
        
		<?php
        $url = $this->uri->segment(1);
        if ($url != 'home') {
            echo '<li><span class="glow"></span>';
        } else {
            echo '<li class="active"><span class="glow"></span>';
        }
        
        ?>
        
        <a href="<?php echo base_url();?>home">
            <i class="icon-dashboard icon-2x"></i>
            <span>Dasboard</span>
        </a>
        </li>
        
        <li class="dark-nav <?php if(	$url == 'member' 	|| 
										$url == 'category' 	||
                                        $url == 'location' 	||
                                        $url == 'condition' ||
                                        $url == 'publisher' ||
                                        $url == 'author' 	||
                                        $url == 'gender' 	||
                                        $url == 'book' 	||
                                        $url == 'role' 	||
                                        $url == 'religion')echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#pengaturan_web" >
                <i class="icon-th-list icon-2x"></i>
                <span>Reference<i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="pengaturan_web" class="collapse <?php if(
                                        $url == 'member' 	|| 
										$url == 'category' 	||
                                        $url == 'location' 	||
                                        $url == 'condition' ||
                                        $url == 'publisher' 	||
                                        $url == 'author' 	||
                                        $url == 'gender' 	||
                                        $url == 'book' 	||
                                        $url == 'role' 	||
                                        $url == 'religion')echo 'in';?>">
                
                <li class="<?php if($url == 'member')echo 'active';?>">
                  <a href="<?php echo base_url();?>member">
                      <i class="icon-file"></i> Members
                  </a>
                </li>
                <li class="<?php if($url == 'category')echo 'active';?>">
                  <a href="<?php echo base_url();?>category">
                      <i class="icon-file"></i> Book Category
                  </a>
                </li>
                <li class="<?php if($url == 'location')echo 'active';?>">
                  <a href="<?php echo base_url();?>location">
                      <i class="icon-file"></i> Book Location
                  </a>
                </li>
                <li class="<?php if($url == 'condition')echo 'active';?>">
                  <a href="<?php echo base_url();?>condition">
                      <i class="icon-file"></i> Book Condition
                  </a>
                </li>
                <li class="<?php if($url == 'publisher')echo 'active';?>">
                  <a href="<?php echo base_url();?>publisher">
                      <i class="icon-file"></i> Publishers
                  </a>
                </li>
                <li class="<?php if($url == 'author')echo 'active';?>">
                  <a href="<?php echo base_url();?>author">
                      <i class="icon-file"></i> Authors
                  </a>
                </li>
                <li class="<?php if($url == 'gender')echo 'active';?>">
                  <a href="<?php echo base_url();?>gender">
                      <i class="icon-file"></i> Gender
                  </a>
                </li>
                <li class="<?php if($url == 'book')echo 'active';?>">
                  <a href="<?php echo base_url();?>book">
                      <i class="icon-file"></i> Book
                  </a>
                </li>
                <li class="<?php if($url == 'role')echo 'active';?>">
                  <a href="<?php echo base_url();?>role">
                      <i class="icon-file"></i> Role
                  </a>
                </li>
                <li class="<?php if($url == 'religion')echo 'active';?>">
                  <a href="<?php echo base_url();?>religion">
                      <i class="icon-file"></i> Religion
                  </a>
                </li>
                
            </ul>
		</li>
        <!--Setting Menu-->
        <li class="dark-nav <?php if(	$url == 'rent' 	|| 
										$url == 'return')echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#pengaturan_menu" >
                <i class="icon-shopping-cart icon-2x"></i>
                <span>Transaction<i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="pengaturan_menu" class="collapse <?php if($url == 'rent' 	|| 
										$url == 'return')echo 'in';?>">
                
                <li class="<?php if($url == 'rent')echo 'active';?>">
                  <a href="<?php echo base_url();?>rent">
                      <i class="icon-file"></i> Rent
                  </a>
                </li>
                
                
            </ul>
		</li>
        
        <!--Setting Report-->
        <li class="dark-nav <?php if(
                                    $url == 'report' ||
                                    $url == 'rent_report' 	||
                                    $url == 'book_report' 	||
                                    $url == 'member_report' 	||
                                    $url == 'statistics_report')echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#report" >
                <i class="icon-folder-open icon-2x"></i>
                <span>Report<i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="report" class="collapse <?php if(
                                                  $url == 'report' ||
                                                  $url == 'rent_report' 	||
                                                  $url == 'book_report' 	||
                                                  $url == 'member_report' 	||
                                                  $url == 'statistics_report')echo 'in';?>">
                
                <li class="<?php if($url == 'report')echo 'active';?>">
                  <a href="<?php echo base_url();?>report">
                      <i class="icon-file"></i> Visitor
                  </a>
                </li>
                <li class="<?php if($url == 'rent_report')echo 'active';?>">
                  <a href="<?php echo base_url();?>rent_report">
                      <i class="icon-file"></i> Rent
                  </a>
                </li>
                <li class="<?php if($url == 'book_report')echo 'active';?>">
                  <a href="<?php echo base_url();?>book_report">
                      <i class="icon-file"></i> Book
                  </a>
                </li>
                <li class="<?php if($url == 'member_report')echo 'active';?>">
                  <a href="<?php echo base_url();?>member_report">
                      <i class="icon-file"></i> Member
                  </a>
                </li>
                <li class="<?php if($url == 'statistics_report')echo 'active';?>">
                  <a href="<?php echo base_url();?>statistics_report">
                      <i class="icon-file"></i> Statistics
                  </a>
                </li>
                
                
            </ul>
		</li>
        
        <!--Media-->
        <li class="dark-nav <?php if($url == 'tools')echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#pengaturan_tools" >
                <i class="icon-hdd icon-2x"></i>
                <span>Tools<i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="pengaturan_tools" class="collapse <?php if($url == 'tools')echo 'in';?>">
                
                <li class="<?php if($url == 'tools')echo 'active';?>">
                  <a href="<?php echo base_url();?>tools">
                      <i class="icon-file"></i> Backup & Restore Database
                  </a>
                </li>
                
                
            </ul>
		</li>
        
        <!--Media-->
        <li class="dark-nav <?php if(	$url == 'profile' || 
										$url == 'setting_rent' || 
                                        $url == 'setting_holiday' ||
                                        $url == 'change_password')echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#pengaturan_profile" >
                <i class="icon-wrench icon-2x"></i>
                <span>Settings<i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="pengaturan_profile" class="collapse <?php if(
                                        $url == 'profile' || 
										$url == 'setting_rent' || 
                                        $url == 'setting_holiday' ||
                                        $url == 'change_password')echo 'in';?>">
                
                <li class="<?php if($url == 'profile')echo 'active';?>">
                  <a href="<?php echo base_url();?>profile">
                      <i class="icon-file"></i> Profile
                  </a>
                </li>
                <li class="<?php if($url == 'setting_rent')echo 'active';?>">
                  <a href="<?php echo base_url();?>setting_rent">
                      <i class="icon-file"></i> Rent Setting
                  </a>
                </li>
                <li class="<?php if($url == 'setting_holiday')echo 'active';?>">
                  <a href="<?php echo base_url();?>setting_holiday">
                      <i class="icon-file"></i> Holiday
                  </a>
                </li>
                <li class="<?php if($url == 'change_password')echo 'active';?>">
                  <a href="<?php echo base_url();?>change_password">
                      <i class="icon-file"></i> Change Password
                  </a>
                </li>
                
            </ul>
		</li>
        
    </ul>
	
</div>