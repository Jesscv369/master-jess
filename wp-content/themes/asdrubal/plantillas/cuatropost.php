<section id="displaypost" class="flexcenter">
    <?php
    $args = array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    
    $the_query = new WP_Query($args);
    //Loop
    while( $the_query->have_posts() ){
        $the_query->the_post();
        include $plantillas .'/display-post/card-post.php';
    }   
    wp_reset_postdata();

    ?>
</section>