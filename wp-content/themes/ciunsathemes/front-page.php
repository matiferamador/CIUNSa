<?php
get_header();
?>
    <section>
        <div class="swiper">
            <?php ciunsa_novedades_destacadas(); ?>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div> 
        </div>  
    </section>
        <main class="contenedor seccion">
            <section class="seccion">
                <h3 class="text-secundario">Últimas Novedades</h3>

                <ul class="listado-grid-novedades data-aos="fade-up data-aos-duration="3000">
                    <?php
                    $args = array (
                        'post_type' => 'post',
                        'posts_per_page' => 4
                    );
                    $blog = new WP_Query($args);
                    while($blog->have_posts()) {
                        $blog -> the_post();
                        get_template_part('template-parts/blog');
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
                <div class="contenedor-boton">
                <a href="<?php echo esc_url( get_permalink(get_page_by_title('Novedades'))) ?>" class="boton boton-primario ">Ver todas las novedades</a>

                </div>
            </section>
        </main>
    <section>
        <div class="contenedor ">
            <div class="text-center seccion-calendario">
                <h3 class="text-blanco">Calendario de Actividades</h3>
                <div class=" seccion-calendario-flex">
                <div class="bg-flecha" >
                    <a href="<?php echo esc_url( get_permalink(get_page_by_title('Calendario de Actividades'))); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l14 0" />
                            <path d="M15 16l4 -4" />
                            <path d="M15 8l4 4" />
                        </svg>
                    </a>
                </div>
                <div>
                        <img src=" <?php echo get_template_directory_uri(); ?>/img/icons8-calendario-94.png" alt="imagen calendario">
                </div>


                </div>
            </div>

        </div>


    </section>
    <section class="seccion contenedor"> 
        <h3 class="text-secundario">Conocé Comunidad CIUNSa</h3>

        <?php
        ciunsa_lista_revista(2);
        ?>
        <div class="contenedor-boton">
        <a href="<?php echo esc_url( get_permalink(get_page_by_title('Comunidad CIUNSa'))) ?>" class="boton boton-primario ">Ir a Comunidad CIUNSa</a>

        </div>
    </section>
    <section class="nav-enlaces-imagenes-bg">
        <h5 class="text-center"> Consejo de Investigación - Universidad Nacional de Salta</h5>

        <div class="nav-enlaces-imagenes">
            <?php
            dynamic_sidebar('Barra Enlaces Recomendados') ?>
        </div>
        
    </section>
    
<?php 
        get_footer();
?>
