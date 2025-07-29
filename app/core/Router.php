<?php 
require_once __DIR__.'/../controllers/HomeController.php';
require_once __DIR__.'/../controllers/NoticiasController.php';
require_once __DIR__.'/../controllers/NotFoundController.php';
class Router {
    public function dispatch($url)  {
        $url = trim($url, '/');
        
        
        $parts = $url ? explode('/', $url) : [];
        $controllerName = $parts[0] ?? 'Home'; //parts 0 existe? Se não, será o Home
        $controllerName = ucfirst($controllerName).'Controller'; //vai formar o nome da classe a ser instanciada
        //echo $controllerName;
        if(!class_exists($controllerName)) {
            //EXIBIR UM 404...
            $controllerName = 'NotFoundController';
        }

        $controller = new $controllerName();
        $actionName = $parts[1] ??'index';
        if(!method_exists($controller, $actionName)) {
            $controllerName = 'NotFoundController';
            $controller = new $controllerName();
            $actionName = 'index';
        }

        //var_dump($controller);
        $controller->$actionName();


    }
}