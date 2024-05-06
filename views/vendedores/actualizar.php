<main class="contenedor seccion">
    <h1>Actualizar vendedor</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>
    <form method="post" class="formulario">
        <?php include 'formulario.php'; ?>
        <input type="submit" value="Actualizar vendedor" class="boton boton-verde">
    </form>
    <a href="/admin" class="boton boton-verde">Volver</a>
</main>