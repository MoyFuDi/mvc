<?php
	class UsuariosModel extends ModeloBase{
		private $table;

		public function __construct(){
			$this->table="usuarios";
			parent::__construct($this->table);
		}

		//Métodos de consulta
		public function getUnUsuario(){
			$query = "SELECT * FROM usuarios WHERE email='victor@victor.com'";
			$usuario = $this->ejecutarSql($query);
			return $usuario;
		}

	}
	