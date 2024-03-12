<?php acf_form_head(); ?>
<?php get_header(); ?>
<!-- Movie items -->
<?php if(get_post_type() == "movie"):?>
<?php 
$title = get_field('title');
$plot =  get_field('plot');
$image = get_field('thumbnail');
$movie_actors = get_field('movie_actor');
?>
<h2><?php echo $title ?></h2>
<img src="<?php echo $image['url'] ?>" alt="thumbnail of <?php echo $title?>" style="width:18rem;">
<p><?php echo $plot ?></p>
<?php
if( $movie_actors ): ?>
    <ul>
    <?php foreach( $movie_actors as $movie_actor ): 
        $permalink = get_permalink( $movie_actor->ID );
        $actor = get_the_title( $movie_actor->ID );
        $custom_field = get_field( 'first_name', $movie_actor->ID );
        ?>
        <li>
            <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $actor ); ?></a>
            <span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>





<!-- Actor items -->
<?php 
elseif(get_post_type()=="actor"):
    $f_name = get_field('first_name');
    $l_name = get_field('last_name');
    $full_name = $f_name ." ". $l_name;
    $p_picture = get_field('profile_picture');
    $actor_movies = get_field('actor_movie');
?>
<div class="container">
    <h2><?php echo $full_name; ?></h2>
    <div class="h-25">
        <img src="<?php echo $p_picture['url']; ?>" alt="<?php $full_name;?>" class="w-25">
    </div>
    <p>Give a Review</p>
    <?php acf_form('review-actor') ?>
</div>



<?php

if( $actor_movies ): ?>
    <ul>
    <?php foreach( $actor_movies as $actor_movie ): 
        $permalink = get_permalink( $actor_movie->ID );
        $title = get_the_title( $actor_movie->ID );
        $custom_field = get_field( 'plot', $actor_movie->ID );
        ?>
        <li>
            <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
            <span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php endif;?>

<?php get_footer(); ?>