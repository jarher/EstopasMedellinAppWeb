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

            $this->route = isset($_GET['r']) ? $_GET['r'] : 'home';

            $controlador = new VistaControlador();
            
            switch($this->route){

                case 'home':
                    $controlador->load_view('home');
                    break;
                case 'productos':
                    $controlador->load_view('productos');
                    break;
                case 'contacto':
                    $controlador->load_view('contacto');
                    break;
                case 'administrador':
                    if( $_SESSION['ok']){
                        $controlador = new VistaControlador();
                        $controlador->load_view('admin');
                    }else{ 
                        if(!isset($_POST['admin-email']) and !isset($_POST['admin-password'])){
                            $controlador->load_view('login');
                        }else{
                            $admin_sesion = new SesionControlador();

                            $sesion = $admin_sesion->login($_POST['admin-email'], $_POST['admin-password']);
                            
                            if(empty($sesion)) {
                                $login_form = new VistaControlador();
                                $login_form->load_view('login');
                                header('Location: ./?error=El usuario ' . $_POST['email'] .' Y la contraseña no coinciden');
                            }else{
                                $_SESSION['ok'] = true;

                                foreach ($sesion as $row){
                                    $_SESSION['name'] = $row['name'];
                                    $_SESSION['email'] = $row['email'];
                                    $_SESSION['password'] = $row['password'];
                                }

                                header('Location: ./administrador');
                            }
                        }
                    }
                    break;
                
                default:
                    $controlador->load_view('error_404');
                    break;
            }
        }
        public function __destruct(){
            $this;
        }
    }
?>