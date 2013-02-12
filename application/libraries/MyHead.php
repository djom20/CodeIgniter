<?php
    class MyHead{
        function show_head(){
            $obj =& get_instance();
            //$obj->load->helper('url');
            $cont = '<!DOCTYPE HTML>';
            $cont.= '<html lang="es-CO">';
            $cont.= '<head>';
            $cont.= '<meta charset="utf-8">';
            $cont.= '<meta name="keywords" content=""/>';
            $cont.= '<meta name="description" content=""/>';
            $cont.= '<meta name="googlebot" content="index,follow"/>';
            $cont.= '<meta name="author" content="Ing. Jonathan Olier Miranda"/>';
            $cont.= '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />';
            $cont.= '<link rel="shortcut icon" type="image/x-ico" href="'.site_url("application/asset/ico/fav.ico").'" />';
            $cont.= '<link rel="stylesheet" type="text/css" href="'.site_url("application/asset/css/stylesheet.min.css").'" media="all">';
            $cont.= '<link rel="stylesheet" type="text/css" href="'.site_url("application/asset/css/bootstrap.css").'" media="all">';
            $cont.= '<link rel="stylesheet" type="text/css" href="'.site_url("application/asset/css/bootstrap-responsive.css").'" media="all">';
            $cont.= '<title>ltiviaOT</title>';
            $cont.= '</head>';
            $cont.= '<body class="container-fluid">';
            $cont.= '<div class="offset1 span10">';
            return $cont;
        }
    }
?>