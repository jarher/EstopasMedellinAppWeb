<?php 
    class ProductosControlador{
        private $model;

        public function __construct(){
            $this->model = new ProductosModelo();
        }

        public function create ($product_data = array()){
            return $this->model->create($product_data);
        }

        public function read ($product_id = ''){
            return $this->model->read($product_id);
        }

        public function update ($product_data = array()){
            return $this->model->update($product_data);
        }

        public function delete ($product_id = ''){
            return $this->model->delete($product_id);
        }
        
         public function __destruct () {
            $this;
        }
    }
?>