<?php

    //Herencia de la clase padre Mysql
    class DatosModel extends Mysql
    {
        
        public function __construct()
        {
            //Cargamos el constructor de la clase padre
            parent::__construct();
        }

        public function getData()
        {
            $sql = "SELECT * FROM bacflotadb";
            $request = $this->select_all($sql);
            return $request;
        }

    }
