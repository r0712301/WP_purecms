<?php get_header();?>
<h1>Wordpress With custom code testing site</h1>
<?php
$argsMovie = array(  
    'post_type' => 'movie',
    'posts_per_page' => '99',
    'orderby' => 'title',
    'order' => 'ASC'
  );
  $movies = new WP_Query($argsMovie);

?>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
            if($movies->have_posts()): 
            while($movies->have_posts()): $movies->the_post();
                $img = get_field('thumbnail');
            ?>
    <div class="carousel-item active">
      <img src="<?php echo esc_url($img['url'])  ?>" class="d-block h-75 w-75" alt="<?php echo $title ?>">
    </div>
    <?php endwhile;
            wp_reset_postdata(); // Reset post data after the movies loop
            endif;
            ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php get_footer();?>