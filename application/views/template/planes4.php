<div id="infoplanes" class="row-fluid">
<?php
	if (isset($query)) {
		foreach ($query->result() as $row) {
			echo '<div class="plans span4">';
			echo anchor('reseller/plans/'.url_title($row->nombre, 'underscore'), '<header><span>Plan '.$row->nombre.'</span><br>$'.$row->precio.' Col</header>');
			echo '</div>';
		}
	}
?>
</div>