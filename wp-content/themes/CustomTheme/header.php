<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/CustomTheme/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
</head>

<body <?php body_class(); ?>>
<?php 
$argsMovie = array(  
  'post_type' => 'movie',
  'posts_per_page' => '99',
  'orderby' => 'title',
  'order' => 'ASC'
);
$argsActor = array(  
  'post_type' => 'actor',
  'posts_per_page' => '99',
  'orderby' => 'title',
  'order' => 'ASC'
);


  $movies = new WP_Query($argsMovie);
  $actors = new WP_Query($argsActor);
  $terms = get_terms( array(
    'taxonomy'   => 'genre',
    'hide_empty' => false,
) );
?>
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav">
        <button class="nav-item btn btn-light <?php if(is_page('home')): echo "active"; endif; ?> px-3"><a href="/" type="button" class="nav-link" aria-current="page">Home</a></button>
        <!-- Movies -->
        <div class="btn-group nav-item  px-3">
          <button type="button" class="btn btn-light <?php if(is_page('movies') || is_singular('movie')): echo "active"; endif; ?>"><a href="/movies" class="nav-link">Movies</a></button>
          <button type="button" class="btn btn-light <?php if(is_page('movies') || is_singular('movie')): echo "active"; endif; ?> dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
          <?php
            if($movies->have_posts()): 
            while($movies->have_posts()): $movies->the_post();
            ?>
            <li><a class="dropdown-item" href="<?php the_permalink();?>"><?php echo get_field('title');?></a></li>
            <?php endwhile;
            wp_reset_postdata(); // Reset post data after the movies loop
            endif;
            ?>
          </ul>
        </div>
        <!-- Actors -->
        <div class="btn-group nav-item px-3">
          <button type="button" class="btn btn-light <?php if(is_page('actors') || is_singular('actor')): echo "active"; endif; ?>"><a href="/actors" class="nav-link">Actors</a></button>
          <button type="button" class="btn btn-light <?php if(is_page('actors') || is_singular('actor')): echo "active"; endif; ?> dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
          <?php
            if($actors->have_posts()): 
            while($actors->have_posts()): $actors->the_post();
            ?>
            <li><a class="dropdown-item" href="<?php the_permalink();?>"><?php the_title();?></a></li>
            <?php endwhile;
            wp_reset_postdata(); // Reset post data after the actors loop
            endif;
            ?>
          </ul>
        </div>
        <!-- Categories -->
        <div class="btn-group nav-item px-3">
          <button type="button" class="btn btn-light <?php if(is_page('genres') || is_tax('genre')): echo "active"; endif; ?>"><a href="/genres" class="nav-link">Genres</a></button>
          <button type="button" class="btn btn-light <?php if(is_page('genres') || is_tax('genre')): echo "active"; endif; ?> dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
          <?php
            if (!empty($terms)):
              foreach($terms as $term){
            ?>
            <li><a class="dropdown-item" href="/genre/<?php echo $term->name ?>"><?php echo $term->name;?></a></li>
            <?php }
            endif;
            ?>
          </ul>
        </div>
        
      </ul>
    </header>
  </div>

<div class="container">


