<div id="slogan3" class="row-fluid">
	<div class="offset1 span3">
		<h3>Contact Form</h3>
		<form action="" class="form-horizontal">
			<div class="control-group">
				<div class="controls">
					<input type="text" placeholder="Your name" name="" required="required">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input type="text" name="" placeholder="Your E-mail" required="required">
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<textarea name="" placeholder="Your message" cols="30" rows="10" style="max-width: 206px;"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="button" class="btn">Cancelar</button>
					<button type="button" class="btn btn-warning"><i class="icon-envelope icon-white"></i> Enviar</button>
				</div>
			</div>
		</form>
	</div>
	<div class="span3">
		<h3>Postal Address</h3>
		<label><strong>Zip Code:</strong> 08001000</label>
		<label><strong>Country:</strong> Barranquilla</label>
		<label><strong>Telephone:</strong> (+57) 301-444-2072</label>
		<label><strong>Email:</strong> <?php echo mailto('info@altiviaot.com', 'info@altiviaot.com'); ?></label>
	</div>
</div>
<div class="row-fluid"></div>
</html>