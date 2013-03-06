<div id="planes" class="row-fluid">
<?php
	if (isset($query)) {
		foreach ($query->result() as $row) {
			echo '<div class="plan_reseller span4">';
			echo '<header><span>Plan '.$row->nombre.'</span></header><ul>';
			echo '<li>'.lang('pl1').'<span>'.$row->discoduro.'</span></li>';
			echo '<li>'.lang('pl2').'<span>'.$row->transferencia.'</span></li>';
			echo '<li>'.lang('pl5').'<span>'.$row->cuentas.'</span></li>';
			echo '<div class="price">$'.$row->precio.' Col</div>';
			echo anchor('reseller/plans/'.url_title($row->nombre, 'underscore'), lang('b'), array('class' => 'btn btn-inverse'));
			echo '</div>';
		}
	}
?>
</div>