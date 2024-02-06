<footer class="footer">
        <hr>

        <div class="contenido-footer  contenedor">
         
            <p class="copyright"> <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
            <div class="menu_footer">
            <?php
                $args = array (
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );

                wp_nav_menu($args);
            ?>

            </div>
        


        </div>
        <div class="contenido-footer_info contenedor">
            <div>
                <p>Consejo de Investigación - Universidad Nacional de Salta </p>
                <p> <a href="https://www.google.com/maps/place/Universidad+Nacional+de+Salta/@-24.727519,-65.4087485,17z/data=!4m15!1m8!3m7!1s0x941bc11699f8a90b:0x2441c06e8139fc11!2sAv.+Bolivia+5150,+A4408+FVY,+Salta!3b1!8m2!3d-24.727519!4d-65.4087485!16s%2Fg%2F11c4tj4s_z!3m5!1s0x941bc113ff725893:0x2981a8b51a8d1fbd!8m2!3d-24.7280425!4d-65.4093198!16s%2Fm%2F047lkmq?entry=ttu">Av. Bolivia 5150, Salta</a></p>

            </div>
            <div>
                <h4>Contacto</h4>
                <p>
                    <a href="mailto:cisec@unsa.edu.ar">cisec@unsa.edu.ar</a>
                </p>
                <p>
                    <a href="tel:+54 387 4255336">+54 387 4255336</a>
                </p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>