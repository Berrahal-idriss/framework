<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 07/03/2019
 * Time: 13:56
 */

namespace App\Controller;
class TestsController extends AppController
{

    public function defaultroute()
    {
        echo 'homepage';
    }
    public function foo()
    {
        echo ('Hello world !');

    }

    public function bar($bar)
    {
        echo $bar;
    }

    public function redirection($args)
    {

        die($args);
    }


}