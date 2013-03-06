<div id="planes" class="row-fluid">
<?php
	if (isset($query)) {
		foreach ($query->result() as $row) {
			echo '<div class="plan_hosting span3">';
			echo '<header><span>Plan '.$row->nombre.'</span></header><ul>';
			echo '<li>'.lang('pl1').'<span>'.$row->discoduro.'</span></li>';
			echo '<li>'.lang('pl2').'<span>'.$row->transferencia.'</span></li>';
			echo '<li>'.lang('pl3').'<span>'.$row->ftp.'</span></li>';
			echo '<li>'.lang('pl4').'<span>'.$row->emails.'</span></li></ul>';
			echo '<div class="price">$'.$row->precio.' Col</div>';
			echo anchor('hosting/plans/'.$row->nombre, lang('b'), array('class' => 'btn btn-inverse')).'</div>';
		}
	}
?>
</div>