<?php
	class Dominios_model extends CI_Model{
		function __construct(){
			parent::Model();
		}

		function get_dominios(){
			$this->db->select('dominio');
            $thi->db->where('estado',1);
            $query = $this->db->get('nombre');
            if ($query->num_row() > 0) {
                return $query;
            }
			return 0;
		}
	}
?>