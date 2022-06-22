<?php 
    class ProductosModelo extends Model {

        public function create($product_data = array()){
            foreach ($product_data as $key => $value){
                $$key = $value;
            }
            $this->query = "INSERT INTO productos (nombre, peso, color, descripcion, imgUrl) VALUES ('$product_name', '$product_weight', '$product_color', '$product_description', '$product_img')";
            $this->set_query();
        }

        public function read($product_id = ''){
            $this->query = ($product_id != '') ? "SELECT * FROM productos WHERE product_id = $product_id" : "SELECT * FROM productos";
            $this->get_query();
            $num_rows = count($this->rows);
            $data = array();
            foreach($this->rows as $key => $value){
                array_push($data, $value);
            }
            return $data;
        }

        public function update($product_data = array()){
             foreach ($product_data as $key => $value){
                $$key = $value;
            }
            var_dump($product_id);
            var_dump($product_name);
            var_dump($product_weight);
            var_dump($product_color);
            var_dump($product_description);
            var_dump($product_img);

            $this->query = "UPDATE productos SET product_id = '$product_id', nombre = '$product_name', precio = '$product_weight', color = '$product_color', descripcion = '$product_description', imgUrl = '$product_img' WHERE product_id = '$product_id'";
            
            $this->set_query();
        }

        public function delete($product_id = ''){
            $this->query = "DELETE FROM productos WHERE product_id = '$product_id'";
            $this->set_query();
        }

        public function __destruct(){
            $this;
        }
    }
?>