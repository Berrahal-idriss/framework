<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 06/03/2019
 * Time: 13:32
 */


require __DIR__ . "/../vendor/autoload.php";

use \Core\Request;
use \Core\Route;
use \Core\Router;
$request = Request::createFormGlobals();

$router = new Router($request);

try{
    $router
        ->addRoute(new Route ("testsFoo","/test/foo",[],"foo"))
        ->addRoute(new Route ("testsBar","/:param",["param"=>"[\w]+"],\App\Controller\TestsController::class,"bar"));
} catch (\Expection $e)
{
    echo $e->getMessage();
}
