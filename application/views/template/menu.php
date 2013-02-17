<div id="menu" class="row-fluid">
<div id="logo">
<?php echo anchor($this->lang->lang(),'<img src="'.site_url("application/asset/img/logotipo.png").'" alt="">'); ?>
</div>
	<ul id="nav">
		<li>
			<?php echo anchor($this->lang->lang().'/contacts/',lang('link5')); ?>
		</li>
		<li>
			<?php echo anchor($this->lang->lang().'/support/',lang('link4')); ?>
		</li>
		<li>
			<?php echo anchor($this->lang->lang().'/reseller/',lang('link3')); ?>
		</li>
		<li>
			<?php echo anchor($this->lang->lang().'/hosting/',lang('link2')); ?>
		</li>
		<li>
			<?php echo anchor($this->lang->lang().'/domains/',lang('link1')); ?>
		</li>
	</ul>
</div>