<?php 
    class SesionControlador{
        private $sesion;

        public function __construct(){
            $this->sesion = new AdministradorModelo();
        }

        public function login($admin_email, $admin_password){
            return $this->sesion->validateAdmin($admin_email, $admin_password);
        }

        public function logout(){
            session_start();
            session_destroy();
            header('Location: ./');
        }
        public function __destruct(){
            $this;
        }
    }
?>