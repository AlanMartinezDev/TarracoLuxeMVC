<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sesión</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form method="post" class="formulario" action="/login" novalidate>
        <fieldset>
            <legend>Datos de inicio de sesión</legend>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required />
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña" required />
        </fieldset>
        <input type="submit" value="Iniciar sesión" class="boton boton-verde">
    </form>
</main>