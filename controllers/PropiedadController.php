<?php

namespace Controllers;

use MVC\Router;

class PropiedadController
{
    public static function index(Router $router)
    {
        $router->render('propiedades/admin');
    }

    public static function crear()
    {
        echo "desde admin crear";
    }

    public static function actualizar()
    {
        echo "desde admin actualizar";
    }
}
