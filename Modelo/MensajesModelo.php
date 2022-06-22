<?php 
    class MensajesModelo extends Model {

        public function create($message_data = array()){
            foreach ($message_data as $key => $value){
                $$key = $value;
            }
            $this->query = "INSERT INTO mensajes (email, nombre, telefono, asunto, mensaje) VALUES ('$email_contact', '$name_contact', '$tel_contact', '$subject_contact', '$message_contact')";
            $this->set_query();
        }

        public function read(){
            $this->query = "SELECT * FROM mensajes";
            $this->get_query();
            $num_rows = count($this->rows);
            $data = array();
            foreach($this->rows as $key => $value){
                array_push($data, $value);
            }
            return $data;
        }

        public function update() {
            null;
        }
        public function delete($message_email = ''){
            $this->query = "DELETE FROM mensajes WHERE email = '$message_email'";
            $this->set_query();
        }

        public function __destruct(){
            $this;
        }
    }
?>