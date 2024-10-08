<?php

    namespace App;

    class Route {

        public function initRoutes() {
            $routes['home'] = array(
                'route' => '/', //indice route que recebe a rota raiz
                'controller' => 'indexController', //qual o controller dessa rota
                'action' => 'index' //ação que será disparada dentro do controlador quando essa rota for requisitada
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sobreNos'
            );
        }

        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }