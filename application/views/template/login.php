<div id="login" class="row-fluid">
    <div id="socialmedia" class="span5">
        <div id="facebook" class="span2"><?php echo anchor('https://facebook.com/pages/Altiviaot/102802866559001','<img src="'.site_url("application/asset/img/facebook.png").'" alt="">'); ?></div>
        <div id="twitter" class="span2"><?php echo anchor('http://twitter.com/altiviaot','<img src="'.site_url("application/asset/img/twitter.png").'" alt="">'); ?></div>
    </div>
    <form action="../scripts/user_conexion.php">
        <input class="span2" type="text" name="username" placeholder="<?php echo lang('place2'); ?>" required="required">
        <input class="span2" type="text" name="password" placeholder="********" required="required">
        <button class="btn btn-warning" type="submit" style="margin-bottom: 10px;"><i class="icon-user icon-white"></i> <?php echo lang('l1'); ?></button>
        <a data-toggle="modal" href="#myModal" class="btn btn-success" type="button" style="margin-bottom: 10px;"><i class="icon-pencil icon-white"></i> <?php echo lang('l2'); ?></a>
    </form>
</div>

<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3>Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-primary">Save changes</a>
        <a href="#" class="btn">Close</a>
    </div>
</div>