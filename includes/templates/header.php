<?php
if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TarracoLuxe</title>
    <link rel="stylesheet" href="/TarracoLuxe/build/css/app.css" />
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/TarracoLuxe/index.php">
                    <img src="/TarracoLuxe/build/img/logo.png" alt="Logotipo de TarracoLuxe" />
                </a>
                <div class="mobile-menu">
                    <img src="/TarracoLuxe/build/img/barras.svg" alt="Icono menú responsive" />
                </div>
                <div class="derecha">
                    <img src="/TarracoLuxe/build/img/dark-mode.svg" alt="Icono dark mode" class="dark-mode-boton" />
                    <nav class="navegacion">
                        <a href="/TarracoLuxe/nosotros.php">Nosotros</a>
                        <a href="/TarracoLuxe/anuncios.php">Anuncios</a>
                        <a href="/TarracoLuxe/blog.php">Blog</a>
                        <a href="/TarracoLuxe/contacto.php">Contacto</a>
                        <?php if (!$auth) : ?>
                            <a href="/TarracoLuxe/login.php">Iniciar sesión</a>
                        <?php endif; ?>
                        <?php if ($auth) : ?>
                            <a href="/TarracoLuxe/admin/">Admin</a>
                            <a href="/TarracoLuxe/logout.php">Cerrar sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <?php if ($inicio) { ?>
                <h1>Venta de casas y pisos exclusivos de lujo en Tarragona</h1>
            <?php } ?>
        </div>
    </header>