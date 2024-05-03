<?php

namespace Controllers;

use MVC\Router;

class PropiedadController
{
    public static function index(Router $router)
    {
        $router->render('propiedades/admin');
    }

    public static function crear(Router $router)
    {
        $router->render('propiedades/admin');
    }

    public static function actualizar(Router $router)
    {
        $router->render('propiedades/admin');
    }
}
