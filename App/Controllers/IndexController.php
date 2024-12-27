<?php

    namespace App\Controllers;

    class IndexController {

        private $view;

        public function __construct() {
            $this->view = new \stdClass(); //classe vazia para passar informações para a view 
        }

        //cada método representa uma action dos routes
        public function index() {

            $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
            $this->render('index');
        }

        public function sobreNos() {
            $this->view->dados = array('Notebook', 'Smartphone');
            $this->render('sobreNos');
        }

        public function render($view) { //renderiza o view desejado e passa os dados para ele
            //echo get_class($this);
            $classeAtual = get_class($this);
            $classeAtual = str_replace('App\\Controllers\\', '', $classeAtual);
            $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));
            
            require_once "../App/Views/".$classeAtual."/".$view.".phtml"; //Lembrete: a referencia para requires está no contexto de "index.php"
            //Está é uma forma bem dinamica de recuperar as views dentro do controlador
        }

    }
    
?>