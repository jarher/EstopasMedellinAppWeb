<?php 
    class AdministradorModel extends Model {

        public function create($admin_data = array()){
            foreach ($admin_data as $key => $value){
                $$key = $value;
            }
            $this->query = "INSERT INTO administrador (nombre, email, password) VALUES ('$admin_name', '$admin_email', MD5('$admin_password')";
            $this->set_query();
        }
        public function read($admin_email = ''){
            $this->query = ($admin_email != '') ? "SELECT * FROM administrador WHERE email = $admin_email" : "SELECT * FROM administrador";
            $this->get_query();
            $num_rows = count($this->rows);
            $data = array();
            foreach($this->rows as $key => $value){
                array_push($data, $value);
            }
            return $data;
        }
        public function update($admin_data = array()){
             foreach ($admin_data as $key => $value){
                $$key = $value;
            }
            $this->query = "UPDATE administrador SET nombre = '$admin_name', email = MD5('$admin_email'), password = '$admin_password' WHERE email = '$admin_email'";
            $this->set_query();
        }
        public function delete($admin_email = ''){
            $this->query = "DELETE FROM administrador WHERE email = '$admin_email'";
            $this->set_query();
        }

        public function validateAdmin($admin_email, $admin_password){
            $this->query = "SELECT * FROM administrador WHERE email = '$admin_email' AND password = MD5('$admin_password')"; 
            $this->get_query();

            $data = array();

            foreach($this->rows as $key => $value){
                array_push($data, $value);
            }

            return $data;
        }

        public function __destruct(){
            $this;
        }
    }
?>