<?php 
    class Router{

        public $route;

        public function __construct($route){
            if( !isset( $_SESSION )){
                session_start();
            }

            if(!isset($_SESSION['ok'])){
                $_SESSION['ok'] = false;
            }

            if( $_SESSION['ok']){
                
            }else{
                if(!isset($_POST['admin-email']) and !isset($_POST['admin-password'])){
                    $login_form = new VistaControlador();
                    $login_form->load_view('login');
                }else{
                    $admin_sesion = new SesionControlador();

                    $sesion = $admin_sesion->login($_POST['admin-email'], $_POST['admin-password']);
                    
                    if(empty($sesion)) {
                        echo 'El usuario y el password son incorrectos';
                    }else{
                        echo 'El usuario y el password son correctos';
                    }
                }
                
            }
        }
        public function __destruct(){
            $this;
        }
    }
?>