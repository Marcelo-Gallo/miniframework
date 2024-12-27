<?php

    namespace App;
    use MF\Init\Bootstrap;
    class Route extends Bootstrap{

        protected function initRoutes() {
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

            $this->setRoutes($routes);
        }

    }