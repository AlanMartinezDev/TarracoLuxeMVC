<?php

use App\Propiedad;

if ($_SERVER['SCRIPT_NAME'] === '/anuncios.php') {
    $propiedades = Propiedad::all();
} else {
    $propiedades = Propiedad::get(3);
}
?>
<div class="contenedor-anuncios">
    <?php foreach ($propiedades as $propiedad) { ?>
        <div class="anuncio">
            <img src="/Tarracoluxe/imagenes/<?php echo $propiedad->imagen; ?>" alt="<?php echo $propiedad->titulo; ?>" loading="lazy" />
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad->titulo; ?></h3>
                <p><?php echo $propiedad->descripcion; ?></p>
                <p class="precio"><?php echo $propiedad->precio; ?> €</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img src="build/img/icono_dormitorio.svg" alt="Icono dormitorio" loading="lazy" class="icono" />
                        <p><?php echo $propiedad->habitaciones; ?></p>
                    </li>
                    <li>
                        <img src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy" class="icono" />
                        <p><?php echo $propiedad->wc; ?></p>
                    </li>
                    <li>
                        <img src="build/img/icono_aparcamiento.svg" alt="Icono aparcamiento" loading="lazy" class="icono" />
                        <p><?php echo $propiedad->plazas; ?></p>
                    </li>
                </ul>
                <a href="anuncio.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Ver propiedad</a>
            </div>
        </div>
    <?php } ?>
</div>