<?php
//include_once 'header.php';
get_header();
/* Template Name: quienes somos */
?>

<div>
    <div class="contenedortitulo">
        <h1>
            <?php the_title();?>
        </h1>
    </div>

    <section id="contenido">
        <?php echo the_content();?>
    </section>
    <?php
        //include $plantillas .'cuatropost.php';
        //include 'plantillas/cuatropost.php';
    ?>
</div>

<?php 
//include_once 'footer.php';
get_footer();
?>