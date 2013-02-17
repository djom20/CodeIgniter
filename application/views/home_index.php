<div id="registrodomain" class="row-fluid">
	<h3><?php echo lang('t1'); ?></h3>
	<div class="span3">
		<img src="<?php echo site_url('application/asset/img/1page-img.jpg'); ?>" alt="" style="width: 16em;">
	</div>
	<div id="domianinfo" class="span8">
		<h4><?php echo lang('s1'); ?></h4>
		<h5><?php echo lang('s2'); ?></h5>
		<form action="../scripts/checkdomain.php" method="GET">
			<input type="text" name="website" placeholder="<?php echo lang('place'); ?>" class="span7" required="required">
			<div class="btn-group" data-toggle="buttons-radio">
				<?php
					if (isset($query)) {
						foreach ($query->result()  as $row) {
							echo '<button name="dominio" class="btn btn-inverse" value="'.$row->nombre.'">'.$row->nombre.'</button>';
						}
						unset($query,$row);
					}
				?>
			</div>
		</form>
	</div>
	<div class="span11">
		<p><?php echo lang('p1'); ?></p>
		<p><?php echo lang('p2'); ?></p>
	</div>
</div>
<?php
	if (isset($request)) {
		echo '<div id="request" class="row-fluid">';
		echo $_REQUEST['$request'];
		if (file_exists("../modulos/whois.php")){ include('../modulos/whois.php'); }
		echo '</div>';
	}
?>
<div class="row-fluid"></div>
</html>