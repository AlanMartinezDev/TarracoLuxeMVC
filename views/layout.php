<?php
if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false;

if (!isset($inicio)) {
    $inicio = false;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TarracoLuxe</title>
    <link rel="stylesheet" href="/build/css/app.css" />
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="/build/img/logo.png" alt="Logotipo de TarracoLuxe" />
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Icono menú responsive" />
                </div>
                <div class="derecha">
                    <img src="/build/img/dark-mode.svg" alt="Icono dark mode" class="dark-mode-boton" />
                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/propiedades">Propiedades</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <?php if (!$auth) : ?>
                            <a href="/login">Iniciar sesión</a>
                        <?php endif; ?>
                        <?php if ($auth) : ?>
                            <a href="/admin">Admin</a>
                            <a href="/logout">Cerrar sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <?php if ($inicio) { ?>
                <h1>Venta de casas y pisos exclusivos de lujo en Tarragona</h1>
            <?php } ?>
        </div>
    </header>

    <?php echo $contenido; ?>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="/nosotros">Nosotros</a>
                <a href="/propiedades">Propiedades</a>
                <a href="/blog">Blog</a>
                <a href="/contacto">Contacto</a>
            </nav>
        </div>
        <p class="copyright">
            Todos los Derechos Reservados <?php echo date('Y'); ?> &copy; TarracoLuxe
        </p>
    </footer>
    <script src="/build/js/bundle.min.js"></script>
</body>

</html>