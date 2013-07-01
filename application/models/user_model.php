<?php
    Class user_model extends CI_Model{

        public function __construct(){

        }

        public function getLogin($username,$password){
            //comprobamos que el nombre de usuario y contraseña coinciden
            $data = array( 'user' => $username, 'pass' => $password );
            $query = $this->db->get_where('usuarios',$data);
            return $query->result_array();
        }

        public function isLogged(){
            //Comprobamos si existe la variable de sesión username. En caso de no existir, le impediremos el paso a la página para usuarios registrados
            if(isset($this->session->userdata['username'])){ return TRUE; }else{ return FALSE; }
        }
}
?>