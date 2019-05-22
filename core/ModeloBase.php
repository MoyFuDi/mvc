<?php
    class ModeloBase extends EntidadBase{
        private $table;
        private $fluent;

        public function __construct($table, $adapter){
            $this->table = (string)$table;
            parent::__construct($table, $dapater);

            $this->fluent = $this->getConectar()->startFluent();
        }

        public function fluent(){
            return $this->fluent;
        }

        public function ejecutarSql($query){
            $query = $this->db()->query($query);
            if($query == true){
                if($query->num_rows > 1){
                    while($row = $query->fetcn_object()){
                        $resultSet[] = $row;
                    }
                }elseif($query->num_rows == 1){
                    if($row = $query->fetch_object()){
                        $resultSet = $row;
                    }
                }else{
                    $resultSet = true;
                }
            }else{
                $resultSet = false;
            }
            return $resultSet;
        }
        // Aqui podemos montarnos metodos para los modelos de consulta
    }