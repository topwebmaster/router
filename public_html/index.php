<?php
/**
 * Created by PhpStorm.
 * User: twb
 * Date: 25.11.14
 * Time: 21:24
 */
include '../r/router.php';
include '../vendor/om/c/MainController.php';

$route = new Router();
$route->add('/', new MainController());
$route->add('/about', new MainController());
$route->add('/shop', new MainController());
print_r($route);

$route->submit();