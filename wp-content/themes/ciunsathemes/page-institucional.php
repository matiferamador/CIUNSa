<?php
/*
* Template Name: Institucional
*/
get_header();
?>
<main class="contenedor seccion"> 
    <?php 
    get_template_part('template-parts/pagina');
    ?>
    <section class="seccion-autoridades">
        <div> 
            <h3 class="text-center text-primario">Autoridades</h3>
        </div>
                <div class="autoridades">
                    <div>
                        <?php 
                        $presidente = get_field('presidentea');
                        $nombre_presidente = $presidente['nombre'];
                        $imagen_presidente = $presidente['imagen'];
                        ?>
                        <h4>Presidente/a</h4>
                        <img class="img-autoridad" src="<?php echo esc_url( $imagen_presidente['url'] ); ?>" alt="<?php echo esc_attr( $nombre_presidente ); ?>">
                        <p><?php echo wp_kses_post( $nombre_presidente ); ?></p>
                    </div>
                    <div>
                        <?php 
                        $vicepresidente = get_field('vicepresidentea');
                        $nombre_vicepresidente = $vicepresidente['nombre'];
                        $imagen_vicepresidente = $vicepresidente['imagen'];
                        ?>
                        <h4>Vicepresidente/a</h4>
                        <img class="img-autoridad" src="<?php echo esc_url( $imagen_vicepresidente['url'] ); ?>" alt="<?php echo esc_attr( $nombre_vicepresidente ); ?>">
                        <p><?php echo wp_kses_post( $nombre_vicepresidente ); ?></p>
                    </div>
                    <div>
                        <?php 
                        $secretario = get_field('secretarioa_tecnicoa');
                        $nombre_secretario = $secretario['nombre'];
                        $imagen_secretario = $secretario['imagen'];
                        ?>
                        <h4>Secretario/a Técnico/a</h4>
                        <img class="img-autoridad" src="<?php echo esc_url( $imagen_secretario['url'] ); ?>" alt="<?php echo esc_attr( $nombre_secretario ); ?>">
                        <p><?php echo wp_kses_post( $nombre_secretario ); ?></p>
                    </div>
                </div>

    <div>
        <h4 class="text-center text-secundario">Personal CIUNSa</h4>
    </div>
    <div class="personales-ciunsa">
        <div class="personal">
        <?php 
                $mesadeentradas = get_field('mesa_de_entradas');
                $nombre = $mesadeentradas['nombre'];
                $imagen = $mesadeentradas['imagen'];
                $cargo = $mesadeentradas['cargo'];
                ?>
                <p><?php echo wp_kses_post($nombre); ?></p>
                <img class="img-autoridad" src="<?php echo esc_url( $imagen['url'] ); ?>" alt="<?php echo esc_attr( $nombre ); ?>">

                <p><?php echo wp_kses_post($cargo); ?></p>



        </div>
    </div>


        <div> 
            <h3 class="text-center text-primario">Consejeros/as Profesores</h3>
        </div>
        <div class="autoridades">
            <div class="autoridad">
                <?php 
                $facultad = get_field('facultad_de_ingenieria');
                $texto = $facultad['titular'];
                $texto2 = $facultad['suplente'];
                ?>
                <h4 class="text-secundario">Facultad de Ingeniería</h4>
                <p><span>Titular:</span> <?php echo wp_kses_post( $texto ); ?></p>
                <p><span>Suplente:</span> <?php echo wp_kses_post( $texto2 ); ?></p>
            </div>
            <div class="autoridad">
                <?php 
                $facultad = get_field('facultad_de_humanidades');
                $texto = $facultad['titular'];
                $texto2 = $facultad['suplente'];
                ?>
                <h4 class="text-secundario">Facultad de Humanidades</h4>
                <p><span>Titular:</span> <?php echo wp_kses_post( $texto ); ?></p>
                <p><span>Suplente:</span> <?php echo wp_kses_post( $texto2 ); ?></p>
            </div>
            <div class="autoridad">
                <?php 
                $facultad = get_field('facultad_de_ciencias_naturales');
                $texto = $facultad['titular'];
                $texto2 = $facultad['suplente'];
                ?>
                <h4 class="text-secundario">Facultad de Ciencias Naturales</h4>
                <p><span>Titular:</span> <?php echo wp_kses_post( $texto ); ?></p>
                <p><span>Suplente:</span> <?php echo wp_kses_post( $texto2 ); ?></p>
            </div>
            <div class="autoridad">
                <?php 
                $facultad = get_field('facultad_de_ciencias_de_la_salud');
                $texto = $facultad['titular'];
                $texto2 = $facultad['suplente'];
                ?>
                <h4 class="text-secundario">Facultad de Ciencias de la Salud</h4>
                <p><span>Titular:</span> <?php echo wp_kses_post( $texto ); ?></p>
                <p><span>Suplente:</span> <?php echo wp_kses_post( $texto2 ); ?></p>
            </div>
            <div class="autoridad">
                <?php 
                $facultad = get_field('facultad_de_ciencias_economicas');
                $texto = $facultad['titular'];
                $texto2 = $facultad['suplente'];
                ?>
                <h4 class="text-secundario">Facultad de Ciencias Económicas</h4>
                <p><span>Titular:</span> <?php echo wp_kses_post( $texto ); ?></p>
                <p><span>Suplente:</span> <?php echo wp_kses_post( $texto2 ); ?></p>
            </div>
            <div class="autoridad">
                <?php 
                $facultad = get_field('facultad_de_ciencias_exactas');
                $texto = $facultad['titular'];
                $texto2 = $facultad['suplente'];
                ?>
                <h4 class="text-secundario">Facultad de Ciencias Exactas</h4>
                <p><span>Titular:</span> <?php echo wp_kses_post( $texto ); ?></p>
                <p><span>Suplente:</span> <?php echo wp_kses_post( $texto2 ); ?></p>   
            </div>
        </div>

        <div> 
            <h3 class="text-center text-primario">Consejeros/as Auxiliares</h3>
        </div>
        <div class="autoridades">
            <div>
                <h4 class="text-secundario">Titulares</h4>
                <?php echo wp_kses_post( get_field('consejerosas_auxiliares_titulares') ); ?>
            </div>
            <div>
                <h4 class="text-secundario">Suplentes</h4>
                <?php echo wp_kses_post( get_field('consejerosas_auxiliares_suplentes') ); ?>
            </div>
        </div>

        <div> 
            <h3 class="text-center text-primario">Consejeros/as Alumnos/as</h3>
        </div>
        <div class="autoridades">
            <div>
                <h4 class="text-secundario">Titulares</h4>
                <?php echo wp_kses_post( get_field('consejerosas_alumnosas_titulares') ); ?>
            </div>
            <div>
                <h4 class="text-secundario">Suplentes</h4>
                <?php echo wp_kses_post( get_field('consejerosas_alumnosas_suplentes') ); ?>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer();
?>