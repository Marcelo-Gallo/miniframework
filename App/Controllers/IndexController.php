<?php

    namespace App\Controllers;

    class IndexController {

        //cada método representa uma action dos routes
        public function index() {
            echo 'Chegamos ao IndexController e disparamos a action index <br>';
        }

        public function sobreNos() {
            echo 'Chegamos ao IndexController e disparamos a action sobreNos <br>';
        }

    }
    
?>