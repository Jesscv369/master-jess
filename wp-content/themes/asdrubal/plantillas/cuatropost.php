<section id="displaypost">
    <?php
    $args = array(
        'post_per_page' => 4,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $the_query = new WP_Query($args);
    //Loop
    while($the_query->have_post()){
        $the_query->the_post();
        //include
    }
    wp_reset_postdata();
    include 'plantillas/display-post/card-post.php';
    ?>
</section>