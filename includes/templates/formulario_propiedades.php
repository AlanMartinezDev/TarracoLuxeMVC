<fieldset>
    <legend>Información general</legend>
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="propiedad[titulo]" value="<?php echo s($propiedad->titulo); ?>" placeholder="Título de la propiedad">
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="propiedad[precio]" value="<?php echo s($propiedad->precio); ?>" placeholder="Precio de la propiedad">
    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="propiedad[imagen]" value="<?php echo $propiedad->imagen; ?>" accept="image/jpeg, image/png">
    <?php if ($propiedad->imagen) { ?>
        <img src="/TarracoLuxe/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-small">
    <?php } ?>
    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" name="propiedad[descripcion]"><?php echo s($propiedad->descripcion); ?></textarea>
</fieldset>
<fieldset>
    <legend>Información de la propiedad</legend>
    <label for="habitaciones">Habitaciones:</label>
    <input type="number" id="habitaciones" name="propiedad[habitaciones]" value="<?php echo s($propiedad->habitaciones); ?>" placeholder="Número de habitaciones" min="1" max="9">
    <label for="wc">Baños:</label>
    <input type="number" id="wc" name="propiedad[wc]" value="<?php echo s($propiedad->wc); ?>" placeholder="Número de baños" min="1" max="9">
    <label for="plazas">Plazas:</label>
    <input type="number" id="plazas" name="propiedad[plazas]" value="<?php echo s($propiedad->plazas); ?>" placeholder="Número de plazas" min="1" max="9">
</fieldset>
<fieldset>
    <legend>Vendedor</legend>
    <label for="vendedor">Vendedor</label>
    <select name="propiedad[vendedorId]" id="vendedor">
        <option value="" selected>-- Seleccione --</option>
        <?php foreach ($vendedores as $vendedor) { ?>
            <option <?php echo $propiedad->vendedorId === $vendedor->id ? 'selected' : ''; ?> value="<?php echo s($vendedor->id); ?>"><?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?></option>
        <?php } ?>
    </select>
</fieldset>