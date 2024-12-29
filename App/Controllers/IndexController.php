<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;

    class IndexController extends Action {
        //cada método representa uma action dos routes
        public function index() {
            //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');
            
            //instância de conexão
            $conn = Connection::getDb();

            //instânciar modelo
            $produto = new Produto($conn);

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobreNos() {
            //$this->view->dados = array('Notebook', 'Smartphone');
            $this->render('sobreNos', 'layout1');
        }

    }
    
?>