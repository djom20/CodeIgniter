<?php
    class MySlide{
        function show_slide(){
            $obj =& get_instance();
            //$obj->load->helper('url');
            $cont = '<div id="slide" class="row-fluid">';
            $cont .= '<div id="fondo" class="span9" style="float: right;">';
            $cont .= '<div class="info">';
            $cont .= '<img src="'.site_url("application/asset/img/slide-title1.gif").'">';
            $cont .= '<button class="offset8 btn btn-large btn-inverse">Learn More</button>';
            $cont .= '</div>';
            $cont .= '</div>';
            $cont .= '<div class="span3" style="float: left;margin-left: 1%;">';
            $cont .= '<div class="selector current row-fluid"><a href="#">Web Hosting</a><br>';
            $cont .= '<span>Get more information</span>';
            $cont .= '</div>';
            $cont .= '<div class="selector row-fluid"><a href="#">Broadband</a><br>';
            $cont .= '<span>Get more information</span>';
            $cont .= '</div>';
            $cont .= '<div class="selector row-fluid"><a href="#">Email Hosting</a><br>';
            $cont .= '<span>Get more information</span>';
            $cont .= '</div>';
            $cont .= '<div class="selector row-fluid"><a href="#">Reseller</a><br>';
            $cont .= '<span>Get more information</span>';
            $cont .= '</div>';
            $cont .= '</div>';
            $cont .= '</div>';
            return $cont;
        }
    }
?>