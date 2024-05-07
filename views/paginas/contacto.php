<main class="contenedor seccion">
    <h1>Contacto</h1>
    <?php if ($mensaje) { ?>
        <p class="alerta exito"><?php echo $mensaje; ?></p>
    <?php } ?>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
        <img src="build/img/destacada3.jpg" alt="Imagen de contacto" loading="lazy" />
    </picture>
    <h2>Llene el formulario de contacto</h2>
    <form action="/contacto" method="POST" class="formulario">
        <fieldset>
            <legend>Información personal</legend>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" placeholder="Tu nombre" name="contacto[nombre]" required />
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <label for="opciones">Compra o vende:</label>
            <select id="opciones" name="contacto[tipo]" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="compra">Compra</option>
                <option value="vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o presupuesto:</label>
            <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto" name="contacto[precio]" required />
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>¿Cómo desea ser contactado?</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required />
                <label for="contactar-email">Correo electrónico</label>
                <input type="radio" value="email" id="contactar-email" name="contacto[contacto]" required />
            </div>
            <div id="contacto"></div>
        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde" />
    </form>
</main>