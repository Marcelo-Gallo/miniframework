<?php
    namespace MF\Init;

    abstract class Bootstrap {
        private $routes;

        abstract protected function initRoutes();

        public function __construct() {
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        public function getRoutes() {
            return $this->routes;
        }

        public function setRoutes(array $routes) {
            $this->routes = $routes;
        }


        protected function run($url) {
            //sendo inicializado no contrutor. As rotas são inicializadas e armazenadas em $routes e o run é chamado passando a url atual
            //echo 'URL atual: '.$url.'<br>';

            foreach ($this->getRoutes() as $caminho => $route) {

                //print_r($route);
                //echo '<br>';

                if($url == $route['route']) {
                    $class = "App\\Controllers\\".ucfirst($route['controller']); //ucfirst deixa a primeira letra da string maiúscula
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }

        protected function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>