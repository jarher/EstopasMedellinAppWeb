<?php 
    class AdministradorControlador{
        private $model;

        public function __construct(){
            $this->model = new AdministradorModelo();
        }

        public function create ($admin_data = array()){
            return $this->model->create($admin_data);
        }

        public function read ($admin_email = ''){
            return $this->model->read($admin_email);
        }

        public function update ($admin_data = array()){
            return $this->model->update($admin_data);
        }

        public function delete ($admin_email = ''){
            return $this->model->delete($admin_email);
        }
         public function __destruct () {
            $this;
        }
    }
?>