<?php
	class Dominios_model extends Model {

		function __construct(){
			parent::Model();
		}

		function get_dominios(){
			$sql = 'SELECT nombre FROM dominios WHERE estado = 1';
			return mysql_query($sql);
		}
	}
?>