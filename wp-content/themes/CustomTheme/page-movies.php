<?php get_header(); ?>
<div class="blog-header">
            <h1 class="blog-title">Movies</h1>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
<?php
$args = array(  
    'post_type' => 'movie',
    'posts_per_page' => '5'
);

$loop = new WP_Query($args);

if($loop->have_posts()): 

    while ($loop->have_posts()) : $loop->the_post();

$title = get_field('title');
$plot =  get_field('plot');
$img = get_field('thumbnail');
$url = get_field('imdb_url');
?>

<div class="col">
  <div class="card h-100">
    <img src="<?php echo esc_url($img['url']) ?>" class="card-img-top h-auto w-100" alt="thumbnail of <?php echo $title ?>">
    <div class="card-body">
      <h5 class="card-title"><?php echo $title ?></h5>
      <p class="card-text"><?php echo $plot ?></p>
      <a href="<?php the_permalink() ?>" class="btn btn-primary">Go to movie</a>
    </div>
  </div>
</div>
<?php 
endwhile;
endif;?>
</div>
</div>
<?php get_footer(); ?>