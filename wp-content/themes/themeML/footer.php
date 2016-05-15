<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php get_template_part('widget-templates/footerfull'); ?>
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo( 'url' ); ?>/wp-content/themes/themeML/images/1.jpg">
    <div class="row">
        <div class="titulo_parallax col-md-2 col-md-offset-5">Mis Redes Sociales</div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <a href=""><img class="img-responsive pull-right social-img" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/themeML/images/facebook.svg" alt="" width="60" height="60"></a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <a href=""><img class="img-responsive pull-left social-img" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/themeML/images/youtube.svg" alt="" width="60" height="60"></a>
        </div>
    </div>
</div>
<div class="container-fluid accesos_directos">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="view view-first">
            <img class="img-responsive center-block" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/themeML/images/consultoria.svg" alt="" width="160" height="160">
            <div class="mask">  
                <h2>CONSULTORIA</h2>  
                <p>Lo que necesitas saber para que tu negocio marche.</p>  
                <a href="<?php bloginfo( 'url' ); ?>/consultoria/" class="info">Ingresar</a>  
            </div>  
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="view view-first">
            <img class="img-responsive center-block" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/themeML/images/libro.svg" alt="" width="160" height="160">
            <div class="mask">  
                <h2>PUBLICACIONES</h2>  
                <p>Vas a poder acceder a mis publicaciones.</p>  
                <a href="<?php bloginfo( 'url' ); ?>/publicaciones/" class="info">Ingresar</a>  
            </div>  
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="view view-first">
            <img class="img-responsive center-block" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/themeML/images/estudiante-graduado.svg" alt="" width="160" height="160">
            <div class="mask">  
                <h2>ESTUDIANTES</h2>  
                <p>Descarga de material</p>  
                <a href="<?php bloginfo( 'url' ); ?>/estudiantes/" class="info">Ingresar</a>  
            </div>  
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="view view-first">
            <img class="img-responsive center-block" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/themeML/images/email.svg" alt="" width="160" height="160">
            <div class="mask">  
                <h2>CONTACTAME</h2>  
                <p>A través de este fomulario de contacto</p>  
                <a href="<?php bloginfo( 'url' ); ?>/contacto/" class="info">Ingresar</a>  
            </div>  
        </div>
        
    </div>
</div>
<div class="wrapper" id="wrapper-footer">
    
    <div class="container">

        <div class="row">

            <div class="col-md-12">
    
                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="site-info">
                        <a href="http://www.logikos.com.ar" title="Logikos - Diseño de Paginas Web"><?php printf( __( 'Desarrollado por %s'), 'Logikos' ); ?></a>
                        <span class="sep"> | </span>
                        <span>Copyright © 2016/17 - Marcos Lucero</span>
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Loads slider script and settings if a widget on pos hero is published -->
<?php if ( is_active_sidebar( 'hero' ) ): ?>

<script>
    jQuery(document).ready(function() {
        var owl = jQuery('.owl-carousel');
        owl.owlCarousel({
            items:<?php echo get_theme_mod( 'understrap_theme_slider_count_setting', 1 );?>,
            loop:<?php echo get_theme_mod( 'understrap_theme_slider_loop_setting', true );?>,
            autoplay:true,
            autoplayTimeout:<?php echo get_theme_mod( 'understrap_theme_slider_time_setting', 5000 );?>,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: false,
            dots: true,
            autoplayHoverPause:true,
            margin:0,
            autoHeight:true
        });

        jQuery('.play').on('click',function(){
            owl.trigger('autoplay.play.owl',[1000])
        });
        jQuery('.stop').on('click',function(){
            owl.trigger('autoplay.stop.owl')
        });
    });
</script>
<?php endif; ?>

</body>

</html>
