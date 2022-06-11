<?php 
    class VistaControlador{
        private static $view_path = './Vista/';

        public function load_view($view){
            require_once(self::$view_path . 'header.html');
            // require_once(self::$view_path . $view . '.php');
            require_once(self::$view_path . $view);
            require_once(self::$view_path . 'footer.html');
        }

        public function __destruct(){
            $this;
        }
    }
?>