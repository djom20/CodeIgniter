<div id="registrodomain" class="row-fluid">
	<h4>¿Que es un Dominio?</h4>
	<div class="span11">
		<p>Dominio es el nombre que tendrá su página web y sus correos electrónicos empresariales. Por ejemplo: sudominio.com y suempresa.com. Nosotros vendemos los dominios .com, .net, .org, .com.co, .co, etc. Si usted ya tiene el dominio no necesita comprarlo, puede hospedarlo en uno de nuestros planes de hosting o puede transferirlo a nuestra empresa.</p>
		<p>El dominio es uno de los activos más importantes de una empresa, ya que es la forma como se identifica en Internet y es la forma como sus clientes lo encontrarán y contactarán. Es muy importante que adquiera su dominio en una empresa confiable y con respaldo, preferiblemente en su mismo país para que pueda recibir un mejor soporte y una factura legal de este servicio.</p>
	</div>
	<h3>Register Domian</h3>
	<div class="span3">
		<img src="https://dl.dropbox.com/u/57960869/Altiviaot/hosting/images/1page-img.jpg" alt="" style="width: 16em;">
	</div>
	<div id="domianinfo" class="span8">
		<h4 style="text-transform:uppercase;">Las buenas ideas empiezan por un buen nombre</h4>
		<h5>Ingrese los dominios que desea registrar o transferir</h5>
		<?php echo validation_errors('<div class="error">', '</div>'); ?>
		<?php echo form_open('domains/whois') ?>
			<input type="text" name="website" placeholder="Enter your domain name" class="span7" required="required">
			<div class="btn-group" data-toggle="buttons-radio">
				<?php
					if (isset($query)) {
						foreach ($query->result() as $row) {
							echo '<button name="dominio" class="btn btn-inverse" value="'.$row->nombre.'">'.$row->nombre.'</button>';
						}
						unset($query,$row);
					}
				?>
			</div>
		</form>
	</div>
	<div id="domains" class="row-fluid">
		<h3>Precios de Dominios</h3>
		<table class="offset1 table table-condensed table-striped" style="width: 89%;">
		    <thead>
		        <tr>
		            <th>Dominio</th>
		            <th>Años</th>
		            <th>Registrar</th>
		            <th>Transferir</th>
		            <th>Renovar</th>
		        </tr>
		    </thead>
		    <tbody>
		    	<tr><td>.com</td><td>1</td><td>$26000</td><td>$26000</td><td>$26000</td></tr><tr><td>.net</td><td>1</td><td>$26000</td><td>$26000</td><td>$26000</td></tr><tr><td>.org</td><td>1</td><td>$26000</td><td>$26000</td><td>$26000</td></tr><tr><td>.us</td><td>1</td><td>$26000</td><td>$26000</td><td>$26000</td></tr><tr><td>.com.co</td><td>1</td><td>$36000</td><td>$36000</td><td>$36000</td></tr><tr><td>.co</td><td>1</td><td>$42000</td><td>$42000</td><td>$42000</td></tr><tr><td>.es</td><td>1</td><td>$26000</td><td>$26000</td><td>$26000</td></tr>	        
		    </tbody>
		</table>
	</div>
</div>
<?php
	if (isset($request)) {
		echo '<div id="request" class="row-fluid">';
		echo $request;
		if (file_exists("../modulos/whois.php")){ include('../modulos/whois.php'); }
		echo '</div>';
	}
?>
<div class="row-fluid"></div>
</html>