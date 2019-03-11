<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 11/03/2019
 * Time: 10:19
 */

namespace App\Controller;

use Core\AuthComponent;

class UserController extends AppController
{
    public function index()
    {

        if( AuthComponent::checkAutenticated()==true)
        {
             $this->render('login');
        }
        else
        {
            $this->render('index');
        }

    }

    public function login()
    {


    }

    public function logout()
    {
        $this->render('index');
    }

}