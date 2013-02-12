<?php
    class MyScript{
        function show_script(){
            $obj =& get_instance();
            //$obj->load->helper('url');
            $cont = '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/jquery-1.7.2.min.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap.min.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-affix.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-alert.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-button.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-carousel.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-collapse.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-dropdown.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-modal.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-popover.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-scrollspy.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-tab.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-tooltip.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-transition.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/bootstrap-typeahead.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/widgets.js"></script>';
            $cont .= '<script type="text/javascript" src="'.site_url('../application/asset/js/').'/disable select text.js"></script>';
            return $cont;
        }
    }
?>