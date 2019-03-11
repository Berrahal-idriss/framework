<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 11/03/2019
 * Time: 11:29
 */

namespace Core;


class  AuthComponent
{
    public $value;
    public static function checkAutenticated()//index
    {
        $value = array ( "email"=> ("idriss.berahal@le-campus-numerique.fr"), "password"=>("lecampus"));

    }
    public  static  function create($value)//login
    {
        session_start();

    }
    public  static  function delete(Route $route)//logout
    {
        session_start();
    }
}