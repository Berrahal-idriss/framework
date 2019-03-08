<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 08/03/2019
 * Time: 09:48
 */
use src\BladeInstance;

$blade = new BladeInstance("/var/www/views", "/var/www/cache/views");

echo $blade->render("index");