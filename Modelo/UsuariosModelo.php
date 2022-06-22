<?php 
    class UsuariosModelo extends Model {

        public function create($subscribe_data = array()){
            foreach ($subscribe_data as $key => $value){
                $$key = $value;
            }
            $this->query = "INSERT INTO suscriptores (email) values ('$suscribe_email')";
            $this->set_query();
        }

        public function read(){
            $this->query = "SELECT * FROM suscriptores";
            $this->get_query();
            $num_rows = count($this->rows);
            $data = array();
            foreach($this->rows as $key => $value){
                array_push($data, $value);
            }
            return $data;
        }

        public function update(){
            return null;
        }

        public function delete($user_email = ''){
            $this->query = "DELETE FROM suscriptores WHERE email = '$user_email'";
            $this->set_query();
        }

        public function __destruct(){
            $this;
        }
    }
?>