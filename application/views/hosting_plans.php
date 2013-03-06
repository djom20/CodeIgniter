<div id="hosting_plans_details" class="row-fluid">
	<table class="table table-condensed table-hover table-striped">
		<tr><td colspan="10" class="center"><strong><?php echo lang('t2'); ?></strong></td></tr>
		<th class="center">#</th>
		<th class="center">Plan</th>
		<th class="center"><?php echo lang('pl1'); ?></th>
		<th class="center"><?php echo lang('pl2'); ?></th>
		<th class="center"><?php echo lang('pl8'); ?></th>
		<th class="center"><?php echo lang('pl4'); ?></th>
		<th class="center"><?php echo lang('pl3'); ?></th>
		<th class="center"><?php echo lang('pl10'); ?></th>
		<th class="right"><?php echo lang('pl11'); ?></th>
		<?php
			if (isset($query)) {
				foreach ($query->result() as $row) {
					echo '<tr><td class="center">'.$row->id.'</td>';
					echo '<td class="center"><strong>'.$row->nombre.'</strong></td>';
					echo '<td class="center">'.$row->discoduro.'</td>';
					echo '<td class="center">'.$row->transferencia.'</td>';
					echo '<td class="center">'.$row->basedatos.'</td>';
					echo '<td class="center">'.$row->emails.'</td>';
					echo '<td class="center">'.$row->ftp.'</td>';
					echo '<td class="center">'.$row->subdomain.'</td>';
					echo '<td class="right">$'.$row->precio.'</td></tr>';
				}
			}
		?>
	</table>
</div>
<div id="hosting_details_system">
	<table class="table table-condensed table-striped">
		<tr><td colspan="10" class="center"><strong><?php echo lang('t3'); ?></strong></td></tr>
		<th class="center">cPanel</th>
		<th class="center">Apache</th>
		<th class="center">Php</th>
		<th class="center">MySQL</th>
		<th class="center"><?php echo lang('pl12'); ?></th>
		<th class="center"><?php echo lang('pl9'); ?></th>
		<th class="center">Perl</th>
		<th class="center">Kernel</th>
		<?php
			if (isset($query2)) {
				foreach ($query2->result() as $row) {
					echo '<tr><td class="center">'.$row->cpanel.'</td>';
					echo '<td class="center"><strong>'.$row->apache.'</strong></td>';
					echo '<td class="center">'.$row->php.'</td>';
					echo '<td class="center">'.$row->mysql.'</td>';
					echo '<td class="center">'.$row->arquitectura.'</td>';
					echo '<td class="center">'.$row->so.'</td>';
					echo '<td class="center">'.$row->perl.'</td>';
					echo '<td class="center">'.$row->kernel.'</td></tr>';
				}
			}
		?>
	</table>
</div>
<div class="row-fluid"></div>
</html>