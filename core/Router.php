<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 07/03/2019
 * Time: 10:22
 */

namespace Core;


class Router
{
    /**
     * @var array
     */
    private $routes;
    /**
     * @var Request
     */
    private $request;
    /**
     * RouterInterface constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    /**
     * @param Route $route
     *
     * @return Router
     * @throws \Exception
     */
    public function addRoute(Route $route)
    {// Si la route existe déjà (teste sur le nom) alors on soulève une erreur
        if (isset($this->$routes[$route->getName()]))
        {
            throw new \Exception("Cette route existe déja.");

        }
        $this->routes[$route->getName()]=$route;
        return $this;
        // throw new \Exception() ...

        // Sinon on l'ajoute a la liste de nos routes !
    }
    /**
     * @return mixed
     * @throws \Exception
     */
    public function getRouteByRequest()
    {
        foreach ($this->routes as $route)
        {
            if($route->match($this->request->getServer()['REQUEST_URI']))
            {
                return $route;
            }
        }
        throw new \Exeption("Cette route n'existe pas.");
        // Pour chaque route, on teste si elle correspond à la requête, si oui alors on renvoie cette route
        // Si aucune route ne correspond alors on renvoie une erreur
        // throw new \Exception() ...
    }
}