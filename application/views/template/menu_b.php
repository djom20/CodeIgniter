<div id="menu" class="row-fluid">
	<div id="logo">
	<?php echo anchor($this->lang->lang().'/home','<img src="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/logotipo.png" alt="">'); ?>
	</div>
	<ul id="nav" class="span1 <?php echo $this->lang->lang(); ?>">
		<li
		<?php
			if ($this->uri->segment(2, 0)=='contacts')
				echo ' class="current"';
		?>
		>
			<?php echo anchor($this->lang->lang().'/contacts', lang('link5')); ?>
		</li>
		<li
		<?php
			if ($this->uri->segment(2, 0)=='support')
				echo ' class="current"';
		?>
		>
			<?php echo anchor($this->lang->lang().'/support', lang('link4')); ?>
		</li>
		<li
		<?php
			if ($this->uri->segment(2, 0)=='reseller')
				echo ' class="current"';
		?>
		>
			<?php echo anchor($this->lang->lang().'/reseller', lang('link3')); ?>
		</li>
		<li
		<?php
			if ($this->uri->segment(2, 0)=='hosting')
				echo ' class="current"';
		?>
		>
			<?php echo anchor($this->lang->lang().'/hosting', lang('link2')); ?>
		</li>
		<li
		<?php
			if ($this->uri->segment(2, 0)=='domains')
				echo ' class="current"';
		?>
		>
			<?php echo anchor($this->lang->lang().'/domains', lang('link1')); ?>
		</li>
	</ul>
</div>