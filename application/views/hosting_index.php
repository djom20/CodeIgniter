<div id="hosting" class="row-fluid">
	<h2>Hosting</h2>
	<div class="row-fluid">
		<p>
			<?php echo lang('p1'); ?>
		</p>
		<br>
	</div>
	<div class="row-fluid">
		<div class="span1">
			<img src="<?php echo site_url('application/asset/img/cpanel.png'); ?>" alt="" style="width: 76px;">
		</div>
		<p class="span11">
			<?php echo lang('hosting.t1'); ?>
			<?php echo lang('hosting.p2'); ?>
		</p>
	</div>
	<div class="row-fluid">
		<div class="span1">
			<img src="<?php echo site_url('application/asset/img/user.png'); ?>" alt="" style="width: 76px;">
		</div>
		<p class="span11">
			<?php echo lang('hosting.t2'); ?>
			<?php echo lang('hosting.p3'); ?>
		</p>
	</div>
	<div class="row-fluid">
		<div class="span1">
			<img src="<?php echo site_url('application/asset/img/email.png'); ?>" alt="" style="width: 76px;">
		</div>
		<p class="span11">
			<strong><?php echo lang('hosting.t3'); ?></strong>
			<?php echo lang('hosting.mails'); ?>
		</p>
	</div>
	<div class="row-fluid">
		<div class="span1">
			<img src="<?php echo site_url('application/asset/img/activacion.png'); ?>" alt="" style="width: 76px;">
		</div>
		<p class="span11">
			<strong><?php echo lang('hosting.t4'); ?></strong>
			<?php echo lang('hosting.act'); ?>
		</p>
	</div>
	<div id="soporte" class="row-fluid">
		<p><strong><?php echo lang('hosting.t5'); ?></strong></p>
		<img src="<?php echo site_url('application/asset/img/getImage.png'); ?>" alt="" style="width: 100%;">
	</div>
	<br>
	<?php echo anchor('hosting/plans/', lang('hosting.b1'), array('class' => 'btn btn-inverse')); ?>
</div>
<div class="row-fluid"></div>
</html>