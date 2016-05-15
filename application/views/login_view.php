
<div class="container">
            
            <div class="span4 offset4">
                <div class="padded">
                    <center>
                        <img src="<?php echo base_url();?>img/piksi.png" style="height:200px;" />
                    </center>
                    <div class="login box" style="margin-top: 10px;">
                        <div class="box-header">
                            <span class="title">Please Login </span>
                        </div>
                        <div class="box-content padded">
                        <i class="m-icon-swapright m-icon-white"></i>
                        	   <?php echo $this->session->flashdata("k")?><br />
                               <form method="post" action="<?php echo base_url();?>login/do_login">
                               <div class="input-prepend">
                                    <span class="add-on" href="#">
                                    <i class="icon-user"></i>
                                    </span>
                                    <input type="text" size="20" name="username" required="" autofocus=""/>
                                    
                                </div><br /><br />
                                <div class="input-prepend">
                                    <span class="add-on" href="#">
                                    <i class="icon-key"></i>
                                    </span>
                                    <input type="password" size="20" name="password" required=""/>
                                    
                                </div><br /><br />
                                <div>
                                    <input type="submit" class="btn btn-blue btn-block" value="Login"/>
                                        
                                    
                                </div><br />
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
</div>

