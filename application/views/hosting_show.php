<div id="plansinfo" class="row-fluid">
<?php
	if (isset($query)) {
		foreach ($query->result() as $row) {
			echo '<h2>'.$row->nombre.'</h2>';
			echo '<p>'.$row->descripcion.'</p><h4>'.lang('t1').'</h4>';
			echo '<ul><li>'.$row->discoduro.' '.lang('pl1').'</li>';
			echo '<li>'.$row->transferencia.' '.lang('pl2').'</li>';
			echo '<li>1 '.lang('pl6').'</li>';
			echo '<li>1 '.lang('pl7').'</li>';
			echo '<li>'.$row->ftp.' '.lang('pl3').'</li>';
			echo '<li>'.$row->emails.' '.lang('pl4').'</li>';
			echo '<li>'.$row->basedatos.' '.lang('pl8').'</li>';
			echo '<li>'.lang('hosting.os').': Linux</li>';
			echo '<li>Version '.lang('hosting.de').' Apache 2.2</li>';
			echo '<li>Version '.lang('hosting.de').' PHP 5.3</li>';
			echo '<li>Version '.lang('hosting.de').' MySQL 5.1</li>';
			echo '<li>CronJobs</li></ul>';
			echo '<button class="bnt btn-inverse btn-large">'.lang('hosting.btn2').' $'.$row->precio.' Col.</button>';
		}
		unset($query,$row);
	}
?>
</div>
<div class="row-fluid"></div>
</html>