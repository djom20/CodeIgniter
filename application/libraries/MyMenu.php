<?php
    class MyMenu{
        function show_menu(){
            $obj =& get_instance();
            //$obj->load->helper('url');
            //$obj->load->helper('language');
            $obj->lang->load('menu');
            $cont = '<div id="menu" class="row-fluid">';
            $cont .= '<div id="logo">';
            $cont .= anchor($obj->lang->lang(),'<img src="'.site_url("application/asset/img/logotipo.png").'" alt="">');
            $cont .= '</a>';
            $cont .= '</div>';
            $cont .= '<ul id="nav">';
            $cont .= '<li>';
            $cont .= anchor($obj->lang->lang().'/contacts/',lang('link5'));
            $cont .= '</li>';
            $cont .= '<li>';
            $cont .= anchor($obj->lang->lang().'/support/',lang('link4'));
            $cont .= '</li>';
            $cont .= '<li>';
            $cont .= anchor($obj->lang->lang().'/reseller/',lang('link3'));
            $cont .= '</li>';
            $cont .= '<li>';
            $cont .= anchor($obj->lang->lang().'/hosting/',lang('link2'));
            $cont .= '</li>';
            $cont .= '<li>';
            $cont .= anchor($obj->lang->lang().'/domains/',lang('link1'));
            $cont .= '</li>';
            $cont .= '</ul>';
            $cont .= '</div>';
            return $cont;
        }
    }
?>