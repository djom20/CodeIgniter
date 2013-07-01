<div id="login" class="row-fluid">
    <div id="socialmedia" class="span2">
        <div id="facebook" class="span3"><?php echo anchor('https://facebook.com/pages/Altiviaot/102802866559001','<img src="https://dl.dropbox.com/u/57960869/Altiviaot/hosting/images/facebook.png" alt="">'); ?></div>
        <div id="twitter" class="span3"><?php echo anchor('http://twitter.com/altiviaot','<img src="https://dl.dropbox.com/u/57960869/Altiviaot/hosting/images/twitter.png" alt="">'); ?></div>
    </div>
    <?php
        /*if(isset($this->session->userdata('logged_in'))){
            if(!$this->session->userdata('logged_in')){*/
    ?>
    <?php echo validation_errors(); ?>
    <form action="<?php echo site_url('user/login'); ?>" method="get" >
        <input class="span2" type="text" name="username" placeholder="<?php echo lang('place2'); ?>" required="required">
        <input class="span2" type="password" name="userpass" placeholder="********" required="required">
        <button class="btn btn-warning" type="submit" style="margin-bottom: 10px;"><i class="icon-user icon-white"></i> <?php echo lang('l1'); ?></button>
        <a data-toggle="modal" href="#myModal" class="btn btn-success" type="button" style="margin-bottom: 10px;"><i class="icon-pencil icon-white"></i> <?php echo lang('l2'); ?></a>
    </form>
    <?php
            /*}else{
                echo '<form action="'.site_url('user/login').'" method="get" >';
                echo '<div id="userdata" class="span3 pull-right"><a class="span8" href=""><i class="icon-user"></i> '.$this->session->userdata('username').'Nombre usuario</a><a class="span6" href=""><i class="icon-off"></i> Logout</a></div>';
                echo '</form>';
            }
        }*/
    ?>
</div>
<!--
<a class="btn" data-toggle="modal" href="#myModal">Launch Modal</a>
<div class="modal" id="myModal">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-primary">Save changes</a>
        <a href="#" class="btn" data-dismiss="modal" data-dismiss="modal">Close</a>
    </div>
</div>
-->