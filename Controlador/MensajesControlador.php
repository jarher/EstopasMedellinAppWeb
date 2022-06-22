<?php 
    class MensajesControlador{
        private $model;

        public function __construct(){
            $this->model = new MensajesModelo();
        }

        public function create ($message_data = array()){
            return $this->model->create($message_data);
        }

        public function read ($message_email = ''){
            return $this->model->read($message_email);
        }

        public function update ($message_data = array()){
            return $this->model->update($message_data);
        }

        public function delete ($message_email = ''){
            return $this->model->delete($message_email);
        }
        
         public function __destruct () {
            $this;
        }
    }
?>