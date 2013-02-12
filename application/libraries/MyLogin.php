<?php
    class MyLogin{
        function show_login(){
            $obj =& get_instance();
            //$obj->load->helper('url');
            $cont = '<div id="login" class="row-fluid">';
            $cont .= '<div id="socialmedia" class="span6">';
            $cont .= '<div id="facebook" class="span1">'.anchor('https://facebook.com/pages/Altiviaot/102802866559001','<img src="'.site_url("application/asset/img/facebook.png").'" alt="">').'</div>';
            $cont .= '<div id="twitter" class="span1">'.anchor('http://twitter.com/altiviaot','<img src="'.site_url("application/asset/img/twitter.png").'" alt="">').'</div>';
            $cont .= '</div>';
            $cont .= '<form action="../scripts/user_conexion.php">';
            $cont .= '<input class="span2" type="text" name="username" placeholder="Username" required="required">';
            $cont .= '<input class="span2" type="text" name="password" placeholder="********" required="required">';
            $cont .= '<button class="btn btn-warning" type="submit" style="margin-bottom: 10px;"><i class="icon-user icon-white"></i> Log In</button>';
            $cont .= '<button class="btn btn-success" type="button" style="margin-bottom: 10px;"><i class="icon-pencil icon-white"></i> Sign In</button>';
            $cont .= '</form>';
            $cont .= '</div>';
            return $cont;
        }
    }
?>