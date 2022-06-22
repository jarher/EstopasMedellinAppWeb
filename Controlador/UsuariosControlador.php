<?php 
    class UsuariosControlador{
        private $model;

        public function __construct(){
            $this->model = new UsuariosModelo();
        }

        public function create ($subscribe_data = array()){
            return $this->model->create($subscribe_data);
        }

        public function read (){
            return $this->model->read();
        }

        public function delete ($subscribe_email = ''){
            return $this->model->delete($subscribe_email);
        }
        
         public function __destruct () {
            $this;
        }
    }
?>