<div id="infoplanes" class="row-fluid">
<?php
    if (isset($query)) {
        foreach ($query->result() as $row) {
            echo '<div class="plans span3">';
            echo anchor('hosting/show_plans/'.$row->nombre, '<header><span>Plan '.$row->nombre.'</span><br>$'.$row->precio.' Col</header>');
            echo '</div>';

        }
    }
?>
</div>