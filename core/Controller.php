<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 07/03/2019
 * Time: 16:18
 */


namespace Core;
use Core\Router\Router;
use vendor\duncan3dc\blade\src;

abstract class Controller
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Router
     */
    private $router;
    /**
     * Controller constructor.
     *
     * @param Request $request
     * @param Router  $router
     */
    public function __construct(Request $request, Router $router)
    {
        $this->request = $request;
        $this->router = $router;
    }
    /**
     * @param       $routeName
     * @param array $args
     *
     * @throws \Exception
     */
    protected final function redirect($routeName, $args = [])
    {
        $route = $this->router->getRoute($routeName);
        header(sprintf("Location: %s", $route->generateUrl($args)));
    }
    /**
     * @param string $filename
     * @param array $data
     */
    protected function render($filename,$data = [])
    {


        echo $this->blade->render($filename,$data);

    }
}
