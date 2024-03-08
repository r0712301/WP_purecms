<?php get_header();
?>

<div class="blog-header">
            <h1 class="blog-title">Actors</h1>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
<?php
$args = array(  
    'post_type' => 'actor',
    'posts_per_page' => '99',
    'orderby' => 'title',
    'order' => 'ASC'
);

$loop = new WP_Query($args);

if($loop->have_posts()): 

    while ($loop->have_posts()) : $loop->the_post();

    $f_name = get_field('first_name');
    $l_name = get_field('last_name');
    $full_name = $f_name ." ". $l_name;
    $p_picture = get_field('profile_picture');
    $actor_movies = get_field('actor_movie');
?>

<div class="col">
  <div class="card h-100">
    <img src="<?php echo esc_url($p_picture['url']) ?>" class="card-img-top h-auto w-75 align-self-center" alt="thumbnail of <?php echo $full_name ?>">
    <div class="card-body">
      <h5 class="card-title"><?php echo $full_name ?></h5>
      <a href="<?php the_permalink() ?>" class="btn btn-primary">Go to actor</a>
    </div>
  </div>
</div>
<?php 
endwhile;
wp_reset_postdata(); // Reset post data after the actors loop
endif;?>
</div>
</div>

<?php get_footer();?>