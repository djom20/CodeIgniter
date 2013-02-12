<?php
    class MyPlans1{
        function show_plans(){
            $obj =& get_instance();
            //$obj->load->helper('url');
            $cont = '<div id="planes" class="row-fluid">';
            /*$query = $this->db->query('planes_hosting');
            foreach ($query as $row) {
                $cont .= '<div class="plan_hosting span3">';
                $cont .= '<header><span>Plan '.$row->nombre.'</span></header><ul>';
                $cont .= '<li>Disk space<span>'.$row->discoduro.'</span></li>';
                $cont .= '<li>Monthly transfer<span>'.$row->transferencia.'</span></li>';
                $cont .= '<li>FTP accounts<span>'.$row->ftp.'</span></li>';
                $cont .= '<li>Email boxes<span>'.$row->emails.'</span></li></ul>';
                $cont .= '<div class="price">$'.$row->precio.' Col</div>';
                $cont .= '<a href="../plans_hosting/'.$row->nombre.'.php" class="btn btn-inverse">Learn More</a></div>';
            }*/
            $cont.='</div>';
            return $cont;
        }
    }
?>