<?php
    class MyLang{
        function show_changelang(){
            $obj =& get_instance();
            //$obj->load->helper('url');
            $cont = '<div id="lang" class="row-fluid">';
            $cont .= '<ul>';
            $cont .='<li';
            if($obj->lang->lang() == "en") {
                $cont .=' class="active">';
                $cont .='EN';
            }else{
                $cont .='>';
                $cont .= anchor($obj->lang->switch_uri("en"),"EN");
            }
            $cont .='</li>';
            $cont .='<li';
            if($obj->lang->lang() == "es") { 
                $cont .=' class="active">';
                $cont .='ES';
            }else{
                $cont .='>';
                $cont .= anchor($obj->lang->switch_uri("es"),"ES");
            }
            $cont .='</li>';
            $cont .='</ul>';
            $cont .='</div>';
            return $cont;
        }
    }
?>