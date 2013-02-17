<div id="plansinfo" class="row-fluid">
<?php
	if (isset($query)) {
		foreach ($query->result() as $row) {
			echo '<h2>'.$row->nombre.'</h2>';
			echo '<p>'.$row->descripcion.'</p><h4>Especificaciones</h4>';
			echo '<ul><li>'.$row->discoduro.' Disk space</li>';
			echo '<li>'.$row->transferencia.' Monthly transfer</li>';
			echo '<li>1 domain to host</li>';
			echo '<li>1 Sub dominios</li>';
			echo '<li>'.$row->emails.' Email boxes</li>';
			echo '<li>'.$row->basedatos.' Database MySQL</li>';
			echo '<li>CronJobs</li></ul>';
			echo '<button class="bnt btn-inverse btn-large">Buy for only '.$row->precio.' Col.</button>';
		}
	}
?>
</div>
<div class="row-fluid"></div>
</html>