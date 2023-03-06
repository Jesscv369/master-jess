<?php
//include_once 'header.php';
get_header();
?>

<div>
    <div class="contenedortitulo">
        <h1>Hola
            <?php the_title();?>
        </h1>
    </div>

    <section id="contenido">
        <?php echo the_content();?>
    </section>
    <?php
        include $plantillas .'cuatropost.php';
        include 'plantillas/cuatropost.php';
    ?>
</div>

<?php 
//include_once 'footer.php';
get_footer();
?>