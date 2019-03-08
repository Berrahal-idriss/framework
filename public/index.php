<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 06/03/2019
 * Time: 13:32
 */


require __DIR__ . "/../vendor/autoload.php";

use \Core\Request;
use Core\Router\Route;
use Core\Router\Router;


$request = Request::createFormGlobals();

$router = new Router($request);

try {
    $router
        ->addRoute(new Route ("defaultRoute", "/", [], \App\Controller\TestsController::class, "defaultroute"))

        ->addRoute(new Route ("testsFoo", "/tests/foo", [], \App\Controller\TestsController::class, "foo"))
        ->addRoute(new Route ("testsBar", "/tests/bar/:param", ["param" => "[\w]+"], \App\Controller\TestsController::class, "bar"))
        ->addRoute(new Route ("redirected", "/tests/redirection/:param", ["param" => "[\w]+"], \App\Controller\TestsController::class, "redirection"))


    /**
     * @var Route $route
     */
    $route = $router->getRouteByRequest();

    $route->call($request, $router);
} catch (\Exception $e) {
    echo $e->getMessage();
}
