<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedad->titulo; ?></h1>
    <img src="imagenes/<?php echo $propiedad->imagen; ?>" alt="<?php echo $propiedad->titulo; ?>" loading="lazy" class="icono" />
    <div class="resumen-propiedad">
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
        <p><?php echo $propiedad->descripcion; ?></p>
    </div>
</main>