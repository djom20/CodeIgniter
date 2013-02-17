<div id="slogan2" class="row-fluid"></div>
<div id="planes" class="row-fluid">
<?php
     if (isset($query)) {
        foreach ($query->result() as $row) {
            echo '<div class="plan_reseller span4">';
            echo '<header><span>Plan '.$row->nombre.'</span></header><ul>';
            echo '<li>Disk space<span>'.$row->discoduro.'</span></li>';
            echo '<li>Monthly transfer<span>'.$row->transferencia.'</span></li>';
            echo '<li>Accounts<span>'.$row->cuentas.'</span></li>';
            echo '<div class="price">$'.$row->precio.' Col</div>';

            $url_title = url_title($row->nombre, 'underscore');
            echo anchor('reseller/show_plans/'.$url_title, 'Learn More', array('class' => 'btn btn-inverse'));
            echo '</div>';
        }
    }
?>
</div>