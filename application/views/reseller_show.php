<div id="reseller" class="row-fluid">
	<h2><?php echo lang('reseller.t1'); ?></h2>
	<div class="row-fluid">
		<div class="span5"><img src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/hosting/images/reseller-linux.png" height="268" width="406" alt=""></div>
		<div id="plansinfo2" class="span7">
		<?php
			if (isset($query)) {
				foreach ($query->result() as $row) {
					echo '<h2>'.$row->nombre.'</h2>';
					echo '<p>'.$row->descripcion.'</p><h4>'.lang('t1').'</h4>';
					echo '<ul><li>'.$row->discoduro.' '.lang('pl1').'</li>';
					echo '<li>'.$row->transferencia.' '.lang('pl2').'</li>';
					echo '<li>'.lang('reseller.domains').' '.lang('pl6').'</li>';
					echo '<li>'.lang('reseller.ssl').'</li>';
					echo '<li>'.lang('reseller.dirip').'</li>';
					echo '<li>PhpMyAdmin</li>';
					echo '<li>Ruby On Rails</li>';
					echo '<li>CGI</li>';
					echo '</ul>';
					echo '<strong>'.lang('reseller.t3').'</strong>:<br>';
					echo '<img src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/hosting/images/getImage.png" alt="" style="width: 100%;"><br><br>';
					echo '<button class="bnt btn-inverse btn-large">'.lang('btn2').' $'.$row->precio.' Col.</button>';
				}
				unset($query,$row);
			}
		?>
		</div>
	</div>
</div>
<div class="row-fluid"></div>
</html>