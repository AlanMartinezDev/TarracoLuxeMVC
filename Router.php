<?php

namespace MVC;

class Router
{
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn)
    {
        $this->rutasGET[$url] = $fn;
    }

    public function comprobarRutas()
    {
        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];

        if ($metodo === 'GET') {
            $fn = $this->rutasGET[$urlActual] ?? null;
        }

        if ($fn) {
            // La URL existe y hay una función asociada
            call_user_func($fn, $this);
        } else {
            echo "404";
        }
    }

    // Muestra una vista
    public function render($view)
    {
        // Almacena en memoria durante un tiempo
        ob_start();

        include_once __DIR__ . "/views/$view.php";

        // Limpia la memoria
        $contenido = ob_get_clean();
        include_once __DIR__ . "/views/layout.php";
    }
}
